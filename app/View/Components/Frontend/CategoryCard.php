<?php

namespace App\View\Components\Frontend;

use App\Category;
use Illuminate\View\Component;

class CategoryCard extends Component
{
    public Category $category;
    public $reversed;

    public function __construct(Category $category, $reversed = null)
    {
        $this->category = $category;
        $this->reversed = $reversed;
        // dd($reversed);
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
