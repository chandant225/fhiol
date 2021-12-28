@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Newsletter</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid">
        @include('newsletter.form', ['newsletter' => $newsletter])
    </div>
</section>
@endsection
