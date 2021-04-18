<?php

namespace App\View\Components;

use App\Category;
use App\Product;
use Illuminate\View\Component;

class ProductForm extends Component
{
    public $product;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Product $product = null)
    {
        $this->product = $product ?? new Product();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $categories = Category::all();

        return view('components.product-form', [
            'categories' => $categories
        ]);
    }
}
