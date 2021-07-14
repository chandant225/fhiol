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
                    <li class="breadcrumb-item active">Videos</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    @if(count($videos))
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                    <tr>
                        <td>{{ $video->order }}</td>
                        <td>{{ $video->title }}</td>
                        <td>
                            <a class="btn btn-link" href="{{ $video->url }}" target="_blank">View in youtube</a>
                        </td>
                        <td class="d-flex">
                            <a class="btn btn-success btn-sm mr-2" href="{{ route('backend.videos.edit', $video) }}">Edit</a>
                            <form action="{{ route('backend.videos.destroy', $video) }}" onsubmit="return confirm('Are you sure to delete? This action in irreversible.')" method="POST" class="form-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger mr-3" title="Delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
@include('partials.no-content')
@endif
</div>
@endsection
