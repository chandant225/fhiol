<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('frontend.category.index');
    }

    public function show(Category $category)
    {
        $category->load('products');
        return $category->products;
    }
}
