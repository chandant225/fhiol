<?php

namespace App\Http\Livewire\Dashboard;

use App\Page;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RecentPagesTile extends Component
{
    use LivewireAlert;
    
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.dashboard.recent-pages-tile', [
            'pages' => $this->readyToLoad
                ? Page::latest()->limit(5)->get()
                : []
        ]);
    }
}
