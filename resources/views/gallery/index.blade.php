@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gallery</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <livewire:backend.manage-gallery />
            </div>
        </div>
    </div>
</section>
@endsection
