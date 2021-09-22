<?php

namespace App\Http\Controllers\Backend;

use App\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function destroy(Request $request)
    {
        $download = Download::find($request->id);
        if (Storage::exists($download->path)) {
            Storage::delete($download->path);
        }
        $download->delete();

        return $request->wantsJson()
            ? response()->json(['status' => 200, 'message' => 'Deleted Successfully'])
            : redirect()->back()->with('success', 'File has been deleted.');
    }
}
