<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Alert\Facades\Alert;
use App\Http\Requests\Setting\PageSettingRequest;

class PageSettingController extends Controller
{
    public function index()
    {
        return view('setting.page', [
            'title' => 'Page Settings'
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
