<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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

        $product->increment('views');

        return view('frontend.product.show', [
            'siteTitle' => $product->name,
            'product' => $product,
            'specifications' => $product->specifications()
        ]);
    }
}
