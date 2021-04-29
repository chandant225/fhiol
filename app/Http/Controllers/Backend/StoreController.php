<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Store;
use App\Alert\Facades\Alert;

class StoreController extends Controller
{
    public function index()
    {
        return view('store.index');
    }

    public function create()
    {
        return view('store.create-edit');
    }

    public function store(StoreRequest $request)
    {
        Store::create($request->validated());

        Alert::success()->message('Store has been saved')->send();
        return redirect()->route('backend.stores.index');
    }

    public function edit(Store $store)
    {
        return view('store.create-edit', compact('store'));
    }

    public function update(StoreRequest $request, Store $store)
    {
        $store->update($request->validated());

        Alert::success()->message('Store has been updated')->send();
        return redirect()->back();
    }

    public function destroy(Store $store)
    {
        $store->delete();

        Alert::success()->message('Store delated')->send();
        return redirect()->back();
    }
}
