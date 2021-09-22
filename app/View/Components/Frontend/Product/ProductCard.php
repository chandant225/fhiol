<?php

namespace App\View\Components\Frontend\Product;

use App\Product;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public Product $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.product.product-card');
    }
}
