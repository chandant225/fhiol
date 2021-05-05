<?php

namespace App\View\Components;

use App\Category;
use App\Product;
use App\ProductMeta;
use Illuminate\View\Component;
use Symfony\Component\CssSelector\Node\Specificity;

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
        $specifications = $this->product->specifications();

        if (!$this->product->features) 
        {
            $this->product->features = [];
        }

        if (!count($specifications)) {
            $specifications->push(
                new ProductMeta([
                    'type' => 'specification',
                    'key' => null,
                    'value' => null
                ])
            );
        }

        return view('components.product-form', [
            'categories' => $categories,
            'specifications' => $specifications
        ]);
    }
}
