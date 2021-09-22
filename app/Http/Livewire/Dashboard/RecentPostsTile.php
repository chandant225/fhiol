<?php

namespace App\Http\Livewire\Dashboard;

use App\Post;
use Livewire\Component;

class RecentPostsTile extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.dashboard.recent-posts-tile', [
            'posts' => $this->readyToLoad
                ? Post::latest()->limit(5)->get()
                : []
        ]);
    }
}
