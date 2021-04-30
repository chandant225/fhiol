<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use Livewire\Component;

class CategoryForm extends Component
{
    public Category $category;

    protected $listeners = ['editCategory' => 'edit'];

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
        $this->resetCategory();
        $this->alert('success', 'Category Added');
        $this->emit('categoryUpdated');
    }

    public function edit(Category $category)
    {
        $this->category = $category;
    }

    public function update()
    {
        $this->category->save();
        $this->resetCategory();
        $this->alert('success', 'Category Updated');
        $this->emit('categoryUpdated');
    }

    public function resetCategory()
    {
        $this->category = new Category();
    }

    public function cancelEditing()
    {
        $this->resetCategory();   
    }

    public function render()
    {
        return view('livewire.backend.category-form');
    }
}
