<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Mail\Newsletter as MailNewsletter;
use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newsletter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsletterRequest $request)
    {
        $newsletter=Newsletter::create($request->validated());
        return redirect()->route('backend.newsletter.index')->with('success','Newsletter created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $template=Newsletter::findOrFail($id);
        return new MailNewsletter($template);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsletter=Newsletter::findOrFail($id);
        return view('newsletter.edit',compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsletterRequest $request, $id)
    {
        $newsletter=Newsletter::findOrFail($id);
        $newsletter->update($request->validated());
        return redirect()->route('backend.newsletter.index')->with('success','Newsletter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsletter=Newsletter::findOrFail($id);
        $newsletter->delete();
        return redirect()->route('backend.newsletter.index')->with('success','Newsletter deleted successfully');
    }
    public function forceDelete($id)
    {
        $newsletter=Newsletter::withTrashed()->findOrFail($id);
        $newsletter->forceDelete();
        return redirect()->route('backend.newsletter.index')->with('success','Newsletter deleted successfully');
    }

    function restore($id){
        $newsletter=Newsletter::withTrashed()->findOrFail($id);
        $newsletter->restore();
        return redirect()->route('backend.newsletter.index')->with('success','Newsletter restored successfully');
    }
}
