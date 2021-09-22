<?php

namespace App\Http\Livewire\Backend;

use App\PostCategory;
use Illuminate\Support\Str;
use Livewire\Component;

class PostCategoryForm extends Component
{
    public PostCategory $postCategory;

    protected $listeners = [
        'editPostCategory' => 'edit'
    ];

    public function rules()
    {
        return [
            'postCategory.name' => 'required',
            'postCategory.slug' => $this->postCategory->exists ? 'required' : 'nullable',
            'postCategory.description' => 'nullable'
        ];
    }

    public function mount(PostCategory $postCategory = null)
    {
        if (!$postCategory->exists) {
            $this->postCategory = new PostCategory();
        }
    }

    public function save()
    {
        $this->validate();
        $this->postCategory->save();
        $this->resetPostCategory();
        $this->alert('success', 'Category Added');
        $this->emit('postCategoryUpdated');
    }

    public function edit(PostCategory $postCategory)
    {
        $this->postCategory = $postCategory;
    }

    public function update()
    {
        $this->validate();
        $this->postCategory->slug = Str::slug($this->postCategory->slug, '-');
        $this->postCategory->save();
        $this->resetPostCategory();
        $this->alert('success', 'Category Updated');
        $this->emit('postCategoryUpdated');
    }

    public function resetPostCategory()
    {
        $this->postCategory = new PostCategory();
    }

    public function cancelEditing()
    {
        $this->resetPostCategory();
    }

    public function render()
    {
        return view('livewire.backend.post-category-form');
    }
}
