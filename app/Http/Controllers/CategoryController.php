<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order','desc')->get();

        return view('frontend.category.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load(['products'=>function($query){
            $query->orderBy('order','desc');
        }]);



        return view('frontend.category.show', compact('category'));
        return $category->products;
    }
}
