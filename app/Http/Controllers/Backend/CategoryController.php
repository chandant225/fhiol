<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }
}
