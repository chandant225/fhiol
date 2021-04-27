<?php

namespace App\View\Components\Frontend\Product;

use App\Product;
use Illuminate\View\Component;

class FeaturedProductCard extends Component
{
    public Product $product;

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
        return view('components.frontend.product.featured-product-card');
    }
}
