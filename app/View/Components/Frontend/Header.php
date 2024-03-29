<?php

namespace App\View\Components\Frontend;

use App\Category;
use Illuminate\View\Component;

class Header extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $categories = Category::with('products')->orderBy('order','desc')->whereNull('parent_id')->get();

        return view('components.frontend.header', [
            'categories' => $categories
         ]);
    }
}
