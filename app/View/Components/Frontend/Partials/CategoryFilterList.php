<?php

namespace App\View\Components\Frontend\Partials;

use App\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class CategoryFilterList extends Component
{
    public function __construct()
    {
        //
    }

    public function getCategories()
    {
        $categories = Cache::rememberForever('category-filter-list', function () {
            return Category::select(['id', 'name', 'slug'])->get();
        });

        return $categories;
    }

    public function render()
    {
        return view('components.frontend.partials.category-filter-list', [
            'categories' => $this->getCategories()
        ]);
    }
}
