<?php

namespace App\Http\Controllers;

use App\Distribution;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'company_name' => ['required'],
            'contact' => ['required'],
            'street_address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'message' => ['required'],
        ]);

        $distribution = Distribution::create([
            'name' => $request->name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'contact' => $request->contact,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'state' => $request->state,
            'message' => $request->message,
        ]);

        // TODO:send an email

        // redirect to the home page
        return redirect('/thankyou')->with('success', 'Your request has been sent!');
    }
}
