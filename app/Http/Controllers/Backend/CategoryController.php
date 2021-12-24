<?php

namespace App\Http\Controllers\Backend;

use App\Alert\Facades\Alert;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Service\ImageService;

class CategoryController extends Controller
{
    private ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return $this->showForm(new Category);
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category($request->validated());

        if ($request->hasFile('image')) {
            $category->image = $this->imageService->storeImage($request->file('image'));
        }
        $category->save();

        Alert::success()->message('Category added successfully.')->send();
        return redirect()->route('backend.categories.index');
    }

    public function edit(Category $category)
    {
        return $this->showForm($category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->validated());

        if ($request->hasFile('image')) {
            $this->imageService->unlinkImage($category->getOriginal('image'));
            $category->image = $this->imageService->storeImage($request->file('image'));
            // return $request;
        }
        $category->update();

        Alert::success()->message('Category updated successfully.')->send();
        return redirect()->route('backend.categories.index');
    }

    public function destroy(Category $category)
    {
        if ($category->products()->exists()) {
            $this->alert('error', 'Sorry this category have products and cannot be deleted.');
            return;
        }
        $category->delete();
        Alert::success()->message('Category deleted successfully.')->send();
        return redirect()->route('backend.categories.index');
    }

    private function showForm(Category $category)
    {
        $updateMode = false;
        if ($category->exists) {
            $updateMode = true;
        }
        $parentCategories = Category::whereNull('parent_id')->orderBy('name')->get();

        return view('category.create-edit', compact('category', 'updateMode', 'parentCategories'));
    }
}
