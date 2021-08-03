@php

    $categories = App\Models\Category::whereNull('parent_id')
                    ->with('children')
                    ->get();

    dd($categories);

@endphp
