<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\FooterSettingRequest;
use App\Alert\Facades\Alert;

class FooterSettingController extends Controller
{
    public function index()
    {
        return view('setting.footer', [
            'title' => 'Footer Settings'
        ]);
    }

    public function store(FooterSettingRequest $request)
    {
        $validatedSettings = $request->validated();

        appSettings()->set($validatedSettings);

        Alert::message('Settings Saved')->send();
        return redirect()->back()->with('success', 'Settings Saved');
    }
}
