<?php

namespace App\View\Components\Frontend\Partials;

use App\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class CategoryNavbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $categories = Cache::rememberForever('category-filter-list', function () {
            return Category::select(['id', 'name', 'slug'])->get();
        });

        $categories->prepend(new Category([
            'id' => null,
            'name' => 'All',
            'slug' => null
        ]));

        $activeCategoryId = request()->query('category_id') ?? 'null';

        return view('components.frontend.partials.category-navbar', [
            'categories' => $categories,
            'activeCategoryId' => $activeCategoryId
        ]);
    }
}
