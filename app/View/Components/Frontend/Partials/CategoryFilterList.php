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

    public function getCategories()
    {
        $categories = Category::getAll();

        return $categories;
    }

    public function render()
    {
        return view('components.frontend.partials.category-filter-list', [
            'categories' => $this->getCategories()
        ]);
    }
}
