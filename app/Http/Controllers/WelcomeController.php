<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categries = Category::with(['products.featuredImage'])->latest()->get();

        return view('frontend.welcome', [
            'categories' => $categries
        ]);
    }
}
