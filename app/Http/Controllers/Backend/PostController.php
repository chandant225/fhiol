<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Alert\Facades\Alert;
use App\Service\ImageService;
use Illuminate\Support\Arr;

class PostController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        return view('post.index');
    }

    public function create()
    {
        return view('post.form');
    }

    public function store(PostRequest $request)
    {
        $post = Post::create(Arr::except($request->validated(), ['cover_image', 'tags']));

        if ($request->hasFile('cover_image')) {
            $post->cover_image = $this->imageService->storeImage($request->file('cover_image'));
            $post->save();
        }

        // Store tags
        $request->whenFilled('tags', function ($tags) use ($post) {
            $post->tag($tags);
        });

        Alert::success()->message('Post added successfully')->send();
        return redirect()->route('backend.posts.index');
    }

    public function edit(Post $post)
    {
        return view('post.form', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update(Arr::except($request->validated(), ['cover_image', 'tags']));

        if ($request->hasFile('cover_image')) {
            $this->imageService->unlinkImage($post->cover_image);
            $post->cover_image = $this->imageService->storeImage($request->file('cover_image'));
            $post->save();
        }

        $request->whenFilled('tags', function ($tags) use ($post) {
            $post->retag($tags);
        });

        if ($post->wasChanged()) {
            Alert::message('Changes saved')->send();
        }

        return redirect()->route('backend.posts.edit', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        Alert::message('Post moved to trash')->send();
        return redirect()->route('backend.posts.index');
    }

    public function restore($slug)
    {
        $post = Post::where('slug', $slug)->withTrashed()->firstOrFail();
        $post->restore();
        Alert::message('Post has been restored.')->send();
        return redirect()->back();
    }

    public function forceDelete($slug)
    {
        $post = Post::where('slug', $slug)->withTrashed()->firstOrFail();
        $this->imageService->unlinkImage($post->cover_image);
        $post->forceDelete();

        Alert::message('Post has been deleted permanently.')->send();
        return redirect()->back();
    }
}
