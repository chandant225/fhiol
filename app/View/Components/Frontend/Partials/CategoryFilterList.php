<?php

namespace App\View\Components\Frontend\Partials;

use App\Category;
use Illuminate\View\Component;

class CategoryFilterList extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.frontend.partials.category-filter-list', [
            'categories' => Category::select(['id', 'name', 'slug'])->get()
        ]);
    }
}
