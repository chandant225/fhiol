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

    public function trash(Category $category)
    {
        if ($category->products()->exists()) {
            $this->alert('error', 'Sorry this category have products and cannot be deleted');
            return;
        }
        $category->delete();
        $this->alert('success', 'Category Deleted Successfully');
    }

    public function render()
    {
        return view('livewire.backend.category-list', [
            'categories' => Category::latest()->get()
        ]);
    }
}
