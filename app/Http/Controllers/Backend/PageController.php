<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Page;
use App\Service\ImageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function createOrEdit()
    {
        if (request()->has('slug')) {
            $slug = request()->slug;
            $page = Page::where('slug', $slug)->firstOrFail();
        } else {
            $page = new Page();
        }

        return view('page.create-or-edit', compact('page'));
    }

    public function destroy(Page $page)
    {
        $page->delete();

        Alert::message('Page has been trashed')->send();

        return redirect()->route('backend.pages.index')->with('success', 'Page has been trashed');
    }

    public function restore($slug)
    {
        $page = Page::withTrashed()->where('slug', $slug)->firstOrFail();
        $page->restore();
        Alert::message('Page has been restored')->send();
        return redirect()->back()->with('success', 'Page has been restored');
    }

    public function forcedelete($slug)
    {
        $page = Page::withTrashed()->where('slug', $slug)->firstOrFail();

        // Delete featured image first
        if ($page->hasFeaturedImage()) {
            $imageService = new ImageService();
            $imageService->unlinkImage($page->featured_image);
        }

        $page->forceDelete();
        
        Alert::message('Page has been deleted permanently')->send();
        return redirect()->route('backend.pages.index')->with('success', 'Page has been deleted permanently');
    }
}
