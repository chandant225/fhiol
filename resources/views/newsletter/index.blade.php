@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="d-flex mb-2 justify-content-between">
            <h1>Newsletters</h1>
            <a href="{{ route('backend.newsletter.create') }}" class="btn btn-info btn-sm">Add New Newsletter</a>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid">
        @include('alerts.all')
        <div class="row">
            <div class="col-12">
                @livewire('backend.newsletter-list')
            </div>
        </div>
    </div>
</section>
@endsection
