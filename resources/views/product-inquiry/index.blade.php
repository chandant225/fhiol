@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Inquiries</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Inquiries</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <div class="card shadow-sm">
        <div class="card-body p-0">
            @if(count($productInquiries))
            <table class="table">
                <tr class="bg-light" style="font-size: .9rem;">
                    <td>Customer Name</td>
                    <td>Customer Phone</td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach ($productInquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->customer_name }}
                        @if(!$inquiry->viewed())
                        <div class="badge badge-light font-weight-light">New</div>
                        @endif
                    </td>
                    <td>{{ $inquiry->customer_phone }}</td>
                    <td>{{ $inquiry->created_at->diffForHumans() }}</td>
                    <td class="text-right">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-sm btn-primary mr-3" data-toggle="modal" data-target="#inquiry-modal-{{ $inquiry->id }}" title="View">
                                <span><i class="fa fa-eye"></i></span>
                            </button>
                            <form action="{{ route('backend.product-inquiry.destroy', $inquiry) }}" onsubmit="return confirm('Are you sure to delete? This action in irreversible.')" method="POST" class="form-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger mr-3" title="Delete"><span><i class="fa fa-trash-alt"></i></span></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
            @else
            @include('partials.no-content')
            @endif
            
            @if($productInquiries->hasPages())
            <div class="d-flex py-2 px-4">
                <div>
                    Showing results from {{ $productInquiries->firstItem() }} to {{ $productInquiries->lastItem() }} of {{ $productInquiries->total() }}
                </div>
                <div class="ml-auto">
                    {{ $productInquiries->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@foreach ($productInquiries as $inquiry)
<div class="inquiry-detail-modal modal fade" id="inquiry-modal-{{ $inquiry->id }}" data-product-inquiry-id="{{ $inquiry->id }}" tabindex="-1" role="dialog" aria-labelledby="inquiryModalLabel_{{ $inquiry->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inquiryModalLabel">Inquiry Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <td>From</td>
                        <td>{{ $inquiry->customer_name }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $inquiry->customer_phone }}</td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>{{ $inquiry->message }}</td>
                    </tr>
                    <tr>
                        <td>Product</td>
                        <td>
                            @if($inquiry->product->exists)
                            <div>
                                {{-- <span>Name:</span> --}}
                                <a href="{{ route('products.show', $inquiry->product) }}">{{ $inquiry->product->name }}
                                    <span class="svg-icon svg-baseline">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg></span>
                                </a>
                            </div>
                            @else
                            <div class="text-danger font-italic">Product does not exist</div>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@push('scripts')
<script>
    $(document).ready(function() {
        $('.inquiry-detail-modal').on('shown.bs.modal', function(e) {
            let productInquiryId = e.target.dataset.productInquiryId;
            let apiUrl = "{{ route('backend.product-inquiry.mark-read') }}";

            $.ajax({
                type: "post"
                , url: apiUrl
                , data: {
                    '_method': 'PATCH'
                    , '_token': "{{ csrf_token() }}"
                    , 'id': productInquiryId
                }
                , dataType: "dataType"
                , success: function(response) {
                    console.log(response);
                }
            });
        });
    });

    function markViewed() {}

</script>
@endpush
@endsection
