<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $randArray = [null, 1, 2, 3, 4, 5, 10, 15, 32, 49, 54, 18, 7, 29, 43, 12, 36];

        \App\Models\Category::factory(50)->create()->each(function ($category) use ($randArray) {
            $category->parent_id = $randArray[rand(0, count($randArray) - 1)];
            $category->save();
        });
    }
}
