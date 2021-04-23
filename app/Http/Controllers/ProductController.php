<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Products';
        $products = Product::active()->latest()->get();

        return view('frontend.product.index', [
            'title' => $title,
            'products' => $products
        ]);        
    }

    public function show()
    {
        return view('frontend.product.show');        
    }
}
