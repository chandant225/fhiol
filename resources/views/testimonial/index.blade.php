@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Testimonials</h1>
                    <button class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" role="button"  class="btn btn-primary" data-toggle="modal" data-target="#testimonialFormModal">Add New</button>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Testimonials</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <livewire:backend.testimonial.testimonial-list />
    <div class="modal fade" id="testimonialFormModal" tabindex="-1" role="dialog" aria-labelledby="testimonialFormModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="testimonialFormModalLabel">Testimonial</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <livewire:backend.testimonial.form />
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        window.addEventListener('show-testimonial-form', function() {
            $('#testimonialFormModal').modal('show')
        });

        window.addEventListener('hide-testimonial-form', function() {
            $('#testimonialFormModal').modal('hide')
        });
    });
</script>
@endpush