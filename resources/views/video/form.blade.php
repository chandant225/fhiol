@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Videos</h1>
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.videos.create') }}">Add New</a>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('backend.videos.index') }}">Videos</a></li>
                    <li class="breadcrumb-item active">Create New</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-md-6">
            <x-box>
                <form action="{{ $updateMode ? route('backend.videos.update', $video) : route('backend.videos.store') }}" method="post">
                    @csrf
                    @if($updateMode)
                    @method('put')
                    @endif

                    <div class="form-group">
                        <div class="form-group">
                            <label class="required">Name</label>
                            <input type="text" name="title" class="form-control {{ invalid_class('title') }}" value="{{ old('title', $video->title) }}" required>
                            <x-invalid-feedback field="title"></x-invalid-feedback>
                        </div>

                        <div class="form-group">
                            <label class="required">Youtube Url</label>
                            <input type="text" name="url" class="form-control {{ invalid_class('url') }}" value="{{ old('url', $video->url) }}" placeholder="https://youtube.com/***" required>
                            <x-invalid-feedback field="url"></x-invalid-feedback>
                        </div>

                        <div class="form-group">
                            <label class="required">Order</label>
                            <input type="number" name="order" class="form-control {{ invalid_class('order') }}" value="{{ old('order', $video->order) }}" min="0">
                            <x-invalid-feedback field="order"></x-invalid-feedback>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="sumit">{{ $updateMode ? 'Update' : 'Save' }}</button>
                        </div>
                    </div>
                </form>
            </x-box>
        </div>
    </div>
</div>
@endsection
