@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Catalogues</h1>
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.catalogues.create') }}">Add New</a>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Catalogues</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    @forelse ($catalogues as $catalogue)
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <div class="flex-grow-1">{{ $catalogue->title }}</div>
                <a class="btn btn-success btn-sm mr-2" href="{{ $catalogue->file_path }}">View</a>
                <a class="btn btn-success btn-sm mr-2" href="{{ route('backend.catalogues.edit', $catalogue) }}">Edit</a>
                <form action="{{ route('backend.catalogues.destroy', $catalogue) }}" onsubmit="return confirm('Are you sure to delete? This action in irreversible.')" method="POST" class="form-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger mr-3" title="Delete">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    @include('partials.no-content')
    @endforelse
</div>
@endsection
