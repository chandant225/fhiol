@extends('layouts.backend')

@section('content')
<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="d-inline-block">{{ isset($product) ? 'Update' : 'New' }} Product</h1>
                    @isset($product)
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1" href="{{ route('backend.products.create') }}">Add New</a>
                    @endisset
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.products.index') }}">Products</a></li>
                        {{-- <li class="breadcrumb-item active">{{ isset($product) ? 'Update' : 'New' }} Product</li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        {{-- Alerts --}}
        <div class="col-md-6">
            @include('alerts.all')
        </div>
    </div>
    
    <div>
        <x-product-form :product="$product ?? null" />
    </div>
</div>
@endsection