<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Video;

class HomepageController extends Controller
{
    public function index()
    {
        // $newProducts = Product::with(['featuredImage'])->where('is_new', true)->latest()->limit(4)->get();
        // $featuredProducts = Product::with(['featuredImage'])->where('featured', true)->limit(4)->get();

        return view('frontend.homepage', [
            // 'newProducts' => $newProducts,
            // 'featuredProducts' => $featuredProducts,
            'videos' => Video::positioned()->get(),
            'newsAndUpdates' => Post::published()->latest()->get()
        ]);
    }
}
