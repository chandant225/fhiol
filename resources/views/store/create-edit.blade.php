@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="d-inline-block">{{ isset($store) ? 'Update' : 'New' }} Store</h1>
                    @isset($store)
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1" href="{{ route('backend.stores.create') }}">Add New</a>
                    @endisset
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.stores.index') }}">stores</a></li>
                        {{-- <li class="breadcrumb-item active">{{ isset($store) ? 'Update' : 'New' }} store</li> --}}
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
        {{-- <x-product-form :product="$product ?? null" /> --}}
        <x-backend.store-form :store="$store ?? null"></x-backend.store-form>
    </div>
</div>
@endsection