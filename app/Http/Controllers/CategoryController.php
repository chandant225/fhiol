<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('frontend.category.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load('products');

        return view('frontend.category.show', compact('category'));
        return $category->products;
    }
}
