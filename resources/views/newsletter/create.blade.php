@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="d-flex mb-2 justify-content-between">
                <h1>Save Newsletter</h1>
                <a href="{{ route('backend.newsletter.index') }}" class="btn btn-info btn-sm">Newsletter List</a>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid">
       <div class="card">
            <div class="card-body">
                @include('newsletter.form')
            </div>
       </div>

    </div>
</section>
@endsection
