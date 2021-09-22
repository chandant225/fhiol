<?php

namespace App\Http\Controllers;

use App\Post;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;


class PostController extends Controller
{
    use SEOToolsTrait;
    
    public function index()
    {
        $posts = Post::with(['category'])->published()->latest()->paginate();

        return view('frontend.post.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        abort_unless($post->isPublished(), 404);

        $siteTitle = $post->seo_title;

        $this->seo()->setTitle($post->seo_title);
        $this->seo()->setDescription($post->seo_description);
        $this->seo()->opengraph()->addImage($post->imageUrl());

        $post->increment('views');

        $latestPosts = Post::latest()->limit(4)->get();
        $tagService = app(\Cviebrock\EloquentTaggable\Services\TagService::class);

        $tags = $tagService->getAllTags();

        return view('frontend.post.show', [
            'siteTitle' => $siteTitle,
            'post' => $post,
            'latestPosts' => $latestPosts,
            'tags' => $tags
        ]);
    }
}
