<?php

namespace App\Http\Controllers;

use App\Product;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ProductController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
      $title = 'Products';
        $sortBy = request()->query('sort_by', 'recommended');
        $products = Product::with(['featuredImage'])->active();

        $products->when(request()->filled('category_id'), function ($query) {
            return $query->whereHas('category', function ($query) {
                return $query->whereId(request()->query('category_id'));
            });
        });

        if ($sortBy != 'recommended') {
            if ($sortBy == 'high-to-low') {
                $products = $products->orderByRaw('ifnull(sale_price, price) DESC');
            }
            if ($sortBy == 'low-to-high') {
                $products = $products->orderByRaw('ifnull(sale_price, price) ASC');
            }
        }

        $products = $products->latest()->paginate(request()->query('per_page') ?? 15);

        return view('frontend.product.index', [
            'title' => $title,
            'sortedBy' => ucfirst(str_replace('-', ' ', $sortBy)),
            'products' => $products
        ]);
    }

    public function show(Product $product)
    {
        abort_unless($product->isActive(), 404);

        $this->seo()->setTitle($product->seoTitle());
        $this->seo()->setDescription($product->seoDescription());
        $this->seo()->opengraph()->addImage($product->seoImage());

        $product->increment('views');

        return view('frontend.product.show', [
            'siteTitle' => $product->name,
            'product' => $product,
            'specifications' => $product->specifications()
        ]);
    }
}
