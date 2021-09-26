<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Testimonial;
use App\Video;

class HomepageController extends Controller
{
    public function index()
    {
        // $newProducts = Product::with(['featuredImage'])->where('is_new', true)->latest()->limit(4)->get();

        return view('frontend.homepage', [
            // 'newProducts' => $newProducts,
            'testimonials' => Testimonial::positioned()->get(),
            'videos' => Video::positioned()->get(),
            'newsAndUpdates' => Post::published()->latest()->get()
        ]);
    }
}
