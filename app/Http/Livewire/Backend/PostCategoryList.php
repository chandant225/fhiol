<?php

namespace App\Http\Livewire\Backend;

use App\PostCategory;
use Livewire\Component;

class PostCategoryList extends Component
{
    protected $listeners = [
        'postCategoryUpdated' => 'postCategoryUpdated'
    ];

    public function postCategoryUpdated()
    {
        // 
    }

    public function trash(PostCategory $postCategory)
    {
        if ($postCategory->slug == 'uncategorized') {
            $this->alert('error', 'Sorry default category cannot be deleted');
            return;
        }

        if ($postCategory->posts()->exists()) {
            $this->alert('error', 'Sorry this category have posts and cannot be deleted');
            return;
        }

        $postCategory->delete();
        $this->alert('success', 'Category Deleted Successfully');
    }

    public function render()
    {
        return view('livewire.backend.post-category-list', [
            'postCategories' => PostCategory::withCount('posts')->latest()->get()
        ]);
    }
}
