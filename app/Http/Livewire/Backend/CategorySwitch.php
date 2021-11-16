<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CategorySwitch extends Component
{
    use LivewireAlert;
    public $category;

    public $status = true;

    protected $rules = [
        'category.status' => 'nullable|boolean',
    ];

    public function mount(Category $category)   
    {
        $this->category = $category;
    }

    public function updatedCategoryStatus()
    {
        $this->validate();
        $this->category->save();

        $this->alert('success', 'Status Changed!', [
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
      ]);
    }

    public function render()
    {
        return view('livewire.backend.category-switch');
    }
}
