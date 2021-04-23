<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        Alert::message('Category Page Loaded')->success()->send();

        return view('category.index');
    }
}
