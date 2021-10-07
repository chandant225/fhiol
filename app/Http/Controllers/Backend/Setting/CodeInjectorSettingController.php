<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Alert\Facades\Alert;
use App\Http\Requests\Setting\CodeInjectorSettingRequest;

class CodeInjectorSettingController extends Controller
{
    public function index()
    {
        return view('setting.code-injector', [
            'title' => 'Additional Code Injector'
        ]);
    }

    public function store(CodeInjectorSettingRequest $request)
    {
        $validatedSettings = $request->validated();

        appSettings()->set($validatedSettings);

        Alert::message('Settings Saved')->send();
        return redirect()->back()->with('success', 'Settings Saved');
    }
}
