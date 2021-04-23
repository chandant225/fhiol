<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categries = Category::latest()->get();

        return view('frontend.welcome', [
            'categories' => $categries
        ]);
    }
}
