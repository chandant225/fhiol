<?php

namespace App\Http\Livewire;

use App\Page;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PageList extends Component
{
    use LivewireAlert;
    
    public function render()
    {
        $pages = Page::withTrashed()->latest()->paginate();

        return view('livewire.page-list', compact('pages'));
    }
}
