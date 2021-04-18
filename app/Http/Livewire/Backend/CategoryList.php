<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use Livewire\Component;

class CategoryList extends Component
{
    protected $listeners = ['categoryUpdated'];

    public function categoryUpdated()
    {
        // 
    }

    public function render()
    {
        return view('livewire.backend.category-list', [
            'categories' => Category::latest()->get()
        ]);
    }
}
