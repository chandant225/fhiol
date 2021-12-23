<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ProductController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $filters = collect();
        global $filteredCategory;
        $filteredCategory = null;
        $title = 'Products';
        $products = Product::with(['featuredImage', 'category'])->active();

        $products->when(request()->filled('category_id'), function ($query) use ($filters, $filteredCategory) {
            $category = Category::select('name')->where('id', request()->query('category_id'))->first();
            if ($category) {
                global $filteredCategory;
                $filteredCategory = $category->name;
                $filters->push('Category: ' . $category->name);
            }
            return $query->whereHas('category', function ($query) {
                return $query->whereId(request()->query('category_id'));
            });
        });

        $products = $products->orderBy('order','desc')->paginate(request()->query('per_page') ?? 15)->withQueryString();

        return view('frontend.product.index', [
            'title' => $title,
            'products' => $products,
            'filters' => $filters,
            'filteredCategory' => $filteredCategory
        ]);
    }

    public function show(Product $product)
    {
        abort_unless($product->isActive(), 404);

        $product->load(['featuredImage', 'category']);

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
