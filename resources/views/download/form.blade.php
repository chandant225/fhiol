@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Downloads</h1>
                    @if($updateMode)
                    {{-- <a href="{{ route('backend.our-team.index') }}" class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light">Back to listing</a> --}}
                    @else
                    {{-- <a href="{{ route('backend.our-team.create') }}" class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light">Add New</a> --}}
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{ route('backend.our-team.index') }}">Our Team</a></li> --}}
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <x-box>
        <form action="{{ $updateMode ? route('backend.downloads.update', $download) : route('backend.downloads.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
            @if($updateMode)
            @method('put')
            @endif
            <div class="form-group">
                <label class="text-sm">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $download->title) }}">
                <x-invalid-feedback field="title"></x-invalid-feedback>
            </div>

            <div class="form-group">
                <label class="text-sm">File</label>
                <div class="d-flex">
                    @if($updateMode)
                    <div class="mr-4">
                        <img class="img-fluid img-thumbnail" src="{{ $download->downloadUrl() }}" style="max-height: 150px;">
                    </div>
                    @endif
                    <div class="align-self-center">
                        <input type="file" name="file" class="{{ invalid_class('file') }}" accept="image/*">
                        {{-- <small class="form-text">Recommended dimensions: 400X400px or 1:1 aspect ratio.</small> --}}
                        <x-invalid-feedback field="file"></x-invalid-feedback>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" name="show_in_downloads" class="custom-control-input" id="showInDownloads" value="1" @if(old('show_in_downloads')) checked @endif>
                    <label class="custom-control-label" for="showInDownloads">Show in Downloads page</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary px-5">Save</button>
            </div>

        </form>
    </x-box>
</div>
@endsection
