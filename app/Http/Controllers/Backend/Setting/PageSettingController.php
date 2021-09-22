<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Alert\Facades\Alert;
use App\Http\Requests\Setting\PageSettingRequest;
use App\Page;

class PageSettingController extends Controller
{
    public function index()
    {
        $pages = Page::select(['id', 'title', 'slug'])->orderBy('title')->get();

        return view('setting.page', [
            'title' => 'Page Settings',
            'pages' => $pages
        ]);
    }

    public function store(PageSettingRequest $request)
    {
        $validatedSettings = $request->validated();

        appSettings()->set($validatedSettings);

        Alert::message('Settings Saved')->send();
        return redirect()->back()->with('success', 'Settings Saved');
    }
}
