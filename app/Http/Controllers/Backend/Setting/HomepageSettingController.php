<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\HomepageSettingRequest;
use App\Alert\Facades\Alert;
use App\Page;

class HomepageSettingController extends Controller
{
    public function index()
    {
        $pages = Page::select(['id', 'title', 'slug'])->orderBy('title')->get();

        return view('setting.homepage', [
            'title' => 'Homepage Settings',
            'pages' => $pages
        ]);
    }

    public function store(HomepageSettingRequest $request)
    {
        $validatedSettings = $request->validated();

        appSettings()->set($validatedSettings);

        Alert::message('Settings Saved')->send();
        return redirect()->back()->with('success', 'Settings Saved');
    }
}
