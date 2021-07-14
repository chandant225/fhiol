<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::positioned()->get();
        return view('video.index', [
            'videos' => $videos,
        ]);
    }

    public function create()
    {
        return $this->showForm(new Video());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'url' => 'required|url',
            'order' => 'nullable',
        ]);
        $video = new Video();
        $video->title = $request->title;
        $video->url = $request->url;
        $video->order = $request->order;
        $video->save();
        Alert::success()->message('Video Saved.')->send();
        return redirect()->route('backend.videos.index');
    }

    public function edit(Video $video)
    {
        return $this->showForm($video);
    }

    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'url' => 'required|url',
            'order' => 'nullable',
        ]);
        $video->title = $request->title;
        $video->url = $request->url;
        $video->order = $request->order;
        $video->save();
        Alert::success()->message('Video Updated.')->send();
        return redirect()->route('backend.videos.index');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        Alert::success()->message('Video Deleted.')->send();
        return redirect()->route('backend.videos.index');
    }

    public function showForm(Video $video)
    {
        $updateMode = false;
        if ($video->exists) {
            $updateMode = true;
        } else {
            $video->order = Video::max('order') + 1;
        }

        return view('video.form', [
            'video' => $video,
            'updateMode' => $updateMode
        ]);
    }
}
