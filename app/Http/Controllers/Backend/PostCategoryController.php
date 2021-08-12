<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        return view('post-category.index');
    }
}
