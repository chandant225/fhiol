<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Products';
        $products = Product::with(['featuredImage'])->active();

        $products->when(request()->filled('category_id'), function($query) {
            return $query->whereHas('category', function($query) {
                return $query->whereId(request()->query('category_id'));
            });
        });
        
        $products = $products->latest()->paginate(request()->query('per_page') ?? 15);

        return view('frontend.product.index', [
            'title' => $title,
            'products' => $products
        ]);        
    }

    public function show(Product $product)
    {
        return view('frontend.product.show', [
            'siteTitle' => $product->name,
            'product' => $product,
            'specifications' => $product->specifications()
        ]);        
    }
}
