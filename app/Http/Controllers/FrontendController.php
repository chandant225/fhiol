<?php

namespace App\Http\Controllers;

use App\Certification;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function certificationPage(){
        $certifications=Certification::orderBy('order','desc')->get();
        return view('frontend.pages.about.quality-certification',compact('certifications'));
    }
}
