<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostCategory;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;


class PostController extends Controller
{
    use SEOToolsTrait;
    
    public function index($category = null)
    {
        $requestedCategory = PostCategory::where('slug', $category)->first();

        $posts = Post::with(['category'])
        ->when($requestedCategory, function($query) use ($requestedCategory) {
            return $query->where('post_category_id', $requestedCategory->id);
        })
        ->published()->latest()->paginate();

        return view('frontend.post.index', [
            'posts' => $posts,
            'requestedCategory' => $requestedCategory,
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
