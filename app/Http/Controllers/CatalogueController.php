<?php

namespace App\Http\Controllers;

use App\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::latest()->get();

        return view('frontend.catalogue.index', compact('catalogues'));
    }
}
