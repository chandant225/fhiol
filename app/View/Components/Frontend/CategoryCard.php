<?php

namespace App\View\Components\Frontend;

use App\Category;
use Illuminate\View\Component;

class CategoryCard extends Component
{
    public Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.category-card');
    }
}
