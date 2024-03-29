<?php

namespace App\Http\Livewire\Backend;

use App\Post;
use App\PostCategory;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PostList extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $paginate = 15;
    public $postCategories;
    protected $paginationTheme = 'bootstrap';

    public $filter = [
        'title' => null,
        'post_category_id' => 'all',
        'status' => true,
        'trashed' => null,
    ];

    public function mount()
    {
        $this->postCategories = PostCategory::all();
    }

    public function render()
    {
        $posts = Post::with(['category']);
        $posts = $this->filter($posts)
            ->latest()
            ->paginate($this->paginate);

        return view('livewire.backend.post-list', [
            'posts' => $posts
        ]);
    }

    public function search()
    {
        // Just to trigger filter
    }

    private function filter(Builder $posts)
    {
        if ($this->filter['title']) {
            $posts = $posts->whereTitle($this->filter['title']);
        }

        if ($this->filter['post_category_id'] && $this->filter['post_category_id'] != 'all') {
            $posts = $posts->where('post_category_id', $this->filter['post_category_id']);
        }

        if ($this->filter['status'] != 'all') {
            if ($this->filter['status'] == 'published') {
                $posts = $posts->published();
            }

            if ($this->filter['status'] == 'draft') {
                $posts = $posts->draft();
            }
        }

        if ($this->filter['trashed'] != null) {
            $posts = $posts->onlyTrashed();
        }

        return $posts;
    }
}
