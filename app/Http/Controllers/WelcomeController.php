<?php

namespace App\Http\Controllers;

use App\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::with(['featuredImage'])->where('is_new', true)->latest()->limit(4)->get();
        $featuredProducts = Product::with(['featuredImage'])->where('featured', true)->limit(4)->get();

        return view('frontend.welcome', [
            'newProducts' => $newProducts,
            'featuredProducts' => $featuredProducts
        ]);
    }
}
