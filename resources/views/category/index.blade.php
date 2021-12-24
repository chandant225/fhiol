@extends('layouts.backend')

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
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid pb-4">
        <div class="row">
                {{-- <livewire:backend.category-form /> --}}
            <div class="col-md-12">
                {{-- <livewire:backend.category-list /> --}}
                @livewire('backend.category-list')
            </div>
        </div>
    </div>
</section>
@endsection
