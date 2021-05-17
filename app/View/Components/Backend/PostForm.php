<?php

namespace App\View\Components\Backend;

use App\Post;
use App\PostCategory;
use Illuminate\View\Component;

class PostForm extends Component
{
    public Post $post;
    public $postCategories;

    public function __construct(Post $post = null)
    {
        $this->post = $post ?? new Post();
        $this->postCategories = PostCategory::select(['id', 'name', 'slug'])->orderBy('name')->get();
    }

    public function render()
    {
        $tagsArray = [];
        foreach ($this->post->tags as $tag) {
            array_push($tagsArray, $tag->name);
        }

        return view('components.backend.post-form', [
            'tags' => implode(', ', $tagsArray)
        ]);
    }
}
