@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Categories</h1>
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.categories.create') }}">Add New</a>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="container-fluid pb-4">
        <div class="row">
                {{-- <livewire:backend.category-form /> --}}
            <div class="col-md-12">
                {{-- <livewire:backend.category-list /> --}}
                <x-box class="border-0 rounded">
                    <table class="table">
                        <thead>
                            <tr class="bg-light text-uppercase" style="font-size: .8rem; font-weight: 700;">
                                <td>Name</td>
                                <td>Slug</td>
                                <td class="text-center">Status</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            @include('category.listing-row', ['category' => $category ,'level' => 1])
                            @foreach($category->subCategories as $secondLvlCat)
                            @include('category.listing-row', ['category' => $secondLvlCat ,'level' => 2])
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </x-box>
                
            </div>
        </div>
    </div>
</section>
@endsection
