<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Download;
use App\Http\Controllers\Controller;
use App\Service\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->middleware('auth');

        $this->imageService = $imageService;
    }

    public function index()
    {
        $downloads = Download::orderBy('created_at', 'desc')->paginate(15);
        return view('download.index', compact('downloads'));
    }

    public function create()
    {
        return $this->showForm(new Download());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'file' => 'required',
            'show_in_downloads' => 'nullable',
        ]);

        Download::create([
            'title' => $request->title,
            'show_in_downloads' => $request->show_in_downloads ? true : false,
            'path' => $this->imageService->storeImage($request->file('file'))
        ]);

        Alert::success()->message('Item added to downloads.')->send();
        return redirect()->route('backend.downloads.index');
    }

    private function showForm(Download $download)
    {
        $updateMode = false;
        if ($download->exists) {
            $updateMode = true;
        }

        return view('download.form', compact('download', 'updateMode'));
    }

    public function destroy(Request $request)
    {
        $download = Download::findOrFail($request->id);
        if (Storage::exists($download->path)) {
            Storage::delete($download->path);
        }
        $download->delete();

        return $request->wantsJson()
            ? response()->json(['status' => 200, 'message' => 'Deleted Successfully'])
            : redirect()->back()->with('success', 'File has been deleted.');
    }
}
