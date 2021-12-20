<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index(){
        $galleries=Gallery::orderBy('order','desc')->get();
        return view('frontend.pages.gallery.gallery',compact('galleries'));
    }
}
