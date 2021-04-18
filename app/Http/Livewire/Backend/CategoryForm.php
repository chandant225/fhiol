<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use Livewire\Component;

class CategoryForm extends Component
{
    public Category $category;

    public function rules()
    {
        return [
            'category.name' => 'required',
            'category.slug' => 'nullable',
            'category.description' => 'nullable'
        ];
    }

    public function mount(Category $category = null)
    {
        if (!$category->exists) {
            $this->category = new Category();
        }
    }

    public function save()
    {
        $this->validate();

        $this->category->save();

        $this->emit('categoryUpdated');
    }

    public function render()
    {
        return view('livewire.backend.category-form');
    }
}
