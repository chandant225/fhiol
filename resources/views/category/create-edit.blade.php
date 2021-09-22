@extends('layouts.backend')

@push('styles')

<style>
    .parent-category-select option.first-level {
        background: #f1f4f6;
        font-weight: 600;
        padding: 5px 0px;
        font-style: italic;
        font-size: 1rem;
    }
</style>

@endpush

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Categories</h1>
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.categories.create') }}">Add New</a>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category</li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid pb-4">
        <div class="row">
            <div class="col-md-7">
                <x-box class="border-0 rounded">
                    <div class="card-header">
                        <h5>{{ $category->exists ? 'Update Category' : 'Add New Category' }}</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ $updateMode ? route('backend.categories.update', $category) : route('backend.categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($updateMode)
                            @method('put')
                            @endif
                            <div class="form-group">
                                <label class="required">Name</label>
                                <input type="text" name="name" class="form-control {{ invalid_class('name') }}" value="{{ old('name', $category->name) }}">
                                <x-invalid-feedback field="name"></x-invalid-feedback>
                            </div>

                            <div class="form-group">
                                <label>Url Friendly Slug</label>
                                <input type="text" name="slug" class="form-control {{ invalid_class('slug') }}" value="{{ old('slug', $category->slug) }}">
                                <small class="form-text">Slug will be generated automatically if you leave it empty.</small>
                                <x-invalid-feedback field="slug"></x-invalid-feedback>
                            </div>

                            <div class="form-group">
                                <label class="required">Parent Category</label>
                                <select name="parent_id" id="" class="custom-select parent-category-select {{ invalid_class('parent_id') }}">
                                    <option value="">Select Category</option>
                                    @foreach ($parentCategories as $cat)
                                    @continue($updateMode && $category->id == $cat->id)
                                    <option value="{{ $cat->id }}" class="first-level" @if(old('parent_id', $category->parent_id) == $cat->id) selected @endif>{{ $cat->name }}</option>
                                    @foreach ($cat->subCategories as $cat)
                                    <option value="{{ $cat->id }}" class="second-level" disabled> --{{ $cat->name }}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                                <small class="form-text">Select parent category if it falls under another category otherwise leave it empty.</small>
                                <x-invalid-feedback field="parent_id"></x-invalid-feedback>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                @if($updateMode && $category->image)
                                <div class="mb-2">
                                    <img class="img-fluid img-thumbnail" src="{{ $category->imageUrl() }}" alt="{{ $category->name }}" style="max-height: 200px;">
                                </div>
                                @endif
                                <input type="file" name="image" class="form-control-file {{ invalid_class('image') }}" accept="image/*">
                                <x-invalid-feedback field="image"></x-invalid-feedback>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control {{ invalid_class('description') }}" rows="15">{{ old('description', $category->description) }}</textarea>
                                <x-invalid-feedback field="description"></x-invalid-feedback>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary ml-0">{{ $category->exists ? 'Update' : 'Add Category' }}</button>
                            </div>
                        </form>
                    </div>
                </x-box>
            </div>
        </div>
    </div>
</section>
@endsection
