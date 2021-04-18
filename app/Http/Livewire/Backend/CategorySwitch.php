<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use Livewire\Component;

class CategorySwitch extends Component
{
    public $category;

    public $status = true;

    protected $rules = [
        'user.status' => 'nullable|boolean',
    ];

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function updatedCategoryStatus()
    {
        $this->validate();
        $this->category->save();
    }

    public function render()
    {
        return view('livewire.backend.category-switch');
    }
}
