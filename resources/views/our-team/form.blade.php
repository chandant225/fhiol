@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Our Team</h1>
                    @if($updateMode)
                    <a href="{{ route('backend.our-team.index') }}" class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light">Back to listing</a>
                    @else
                    <a href="{{ route('backend.our-team.create') }}" class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light">Add New</a>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.our-team.index') }}">Our Team</a></li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <x-box>
    <form action="{{ $updateMode ? route('backend.our-team.update', $ourTeam) : route('backend.our-team.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
        @if($updateMode)
        @method('put')
        @endif
        <div class="form-group">
            <label class="text-sm">Full Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $ourTeam->name) }}">
            <x-invalid-feedback field="name"></x-invalid-feedback>
        </div>

        <div class="form-group">
            <label class="text-sm">Designation</label>
            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation', $ourTeam->designation) }}">
            <x-invalid-feedback field="designation"></x-invalid-feedback>
        </div>

        <div class="form-group">
            <label class="text-sm">Photo</label>
            <div class="d-flex">
                @if($updateMode)
                <div class="mr-4">
                    <img class="img-fluid img-thumbnail" src="{{ $ourTeam->photoUrl() }}" style="max-height: 150px;">
                </div>
                @endif
                <div class="align-self-center">
                    <input type="file" name="photo" class="{{ invalid_class('photo') }}" accept="image/*">
                    <small class="form-text">Recommended dimensions: 400X400px or 1:1 aspect ratio.</small>
                    <x-invalid-feedback field="photo"></x-invalid-feedback>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="text-sm">Facebook Profile Url</label>
            <input type="text" name="facebook_link" class="form-control @error('facebook_link') is-invalid @enderror" value="{{ old('facebook_link', $ourTeam->facebook_link) }}">
            <x-invalid-feedback field="facebook_link"></x-invalid-feedback>
        </div>

        <div class="form-group">
            <label class="text-sm">Twitter Url</label>
            <input type="text" name="twitter_link" class="form-control @error('twitter_link') is-invalid @enderror" value="{{ old('twitter_link', $ourTeam->twitter_link) }}">
            <x-invalid-feedback field="twitter_link"></x-invalid-feedback>
        </div>

        <div class="form-group">
            <label class="text-sm">LinkedIn Url</label>
            <input type="text" name="linkedin_link" class="form-control @error('linkedin_link') is-invalid @enderror" value="{{ old('linkedin_link', $ourTeam->linkedin_link) }}">
            <x-invalid-feedback field="linkedin_link"></x-invalid-feedback>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary px-5">Save</button>
        </div>

    </form>
</x-box>
</div>
@endsection
