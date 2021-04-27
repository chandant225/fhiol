<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categries = Category::with(['products.featuredImage'])->latest()->get();
        $featuredProducts = Product::where('featured', true)->limit(4)->get();

        return view('frontend.welcome', [
            'categories' => $categries,
            'featuredProducts' => $featuredProducts
        ]);
    }
}
