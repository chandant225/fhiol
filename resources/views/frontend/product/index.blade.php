<x-app-layout>
    <x-slot name="siteTitle">
        Products | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Products
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('products') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                <x-frontend.partials.category-filter-list></x-frontend.partials.category-filter-list>
                <div class="my-4"></div>

                <x-frontend.partials.block-title-box title="Filter By Price" />
                <form action="" class="form">
                    <div class="d-flex my-3">
                        <select name="" id="" class="custom-select rounded-0">
                            <option value="min">MIN</option>
                            <option value="max">MAX</option>
                        </select>
                        <input type="text" class="form-control rounded-0 ml-md-4" placeholder="Rs. xxx">
                    </div>
                    <button class="btn btn-danger btn-sm bg-theme-accent-color rounded-0 px-3 px-md-4">Filter</button>
                </form>

            </div>
            <div class="col-md-9">
                <div class="d-flex mb-2">
                    <div class="align-self-center">
                        {{ $products->total() }} {{ $products->total() < 2 ? 'item' : 'items' }} found
                    </div>
                    <div class="ml-auto">
                        @php
                        $currentQueryString = request()->query();
                        @endphp
                        <div class="dropdown">
                            <button class="btn btn-white border dropdown-toggle" type="button" id="sortByDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $sortedBy }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="sortByDropdown">
                                <a class="dropdown-item" href="{{ route('products.index', array_merge($currentQueryString, ['sort_by' => 'Recommended'])) }}">Recommended</a>
                                <a class="dropdown-item" href="{{ route('products.index', array_merge($currentQueryString, ['sort_by' => 'high-to-low'])) }}">High to Low</a>
                                <a class="dropdown-item" href="{{ route('products.index', array_merge($currentQueryString, ['sort_by' => 'low-to-high'])) }}">Low to High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    {{-- <h4 class="section-text__dark__gray">Our Products</h4> --}}
                </div>
                <section class="">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4">
                            <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
