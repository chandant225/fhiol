<?php

namespace App\Http\Controllers;

use App\Download;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::orderBy('created_at', 'desc')->whereNull('downloadable_type')->paginate(15);

        return view('frontend.pages.publication.download', compact('downloads'));
    }
}
