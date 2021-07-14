<?php

namespace App\Http\Controllers;

use App\Product;
use App\Video;

class WelcomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::with(['featuredImage'])->where('is_new', true)->latest()->limit(4)->get();
        $featuredProducts = Product::with(['featuredImage'])->where('featured', true)->limit(4)->get();

        return view('frontend.welcome', [
            'newProducts' => $newProducts,
            'featuredProducts' => $featuredProducts,
            'videos' => Video::positioned()->get()
        ]);
    }
}
