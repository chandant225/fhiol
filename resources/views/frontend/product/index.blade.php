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
                <form id="price-filter" class="form">
                    {{-- <div class="d-flex my-3">
                        <select name="" id="" class="custom-select rounded-0">
                            <option value="min">MIN</option>
                            <option value="max">MAX</option>
                        </select>
                    </div> --}}
                    <input type="text" name="min_price" class="form-control rounded-0 my-3" placeholder="MIN Price." value="{{ request()->get('min_price') }}">
                    <input type=" text" name="max_price" class="form-control rounded-0 my-3" placeholder="MAX Price" value="{{ request()->get('max_price') }}">
                    <button class="btn btn-danger btn-block bg-theme-accent-color rounded-0 px-3 px-md-4">Filter</button>
                </form>

            </div>
            <div class="col-md-9">
                <div class="d-flex mb-2">
                    <div class="align-self-center">
                        {{ $products->total() }} {{ $products->total() < 2 ? 'item' : 'items' }} found
                    </div>
                    <div class="ml-auto">
                        <div class="dropdown">
                            @php
                            $currentQueryStrings = request()->query();
                            @endphp
                            <button class="btn btn-white border dropdown-toggle" type="button" id="sortByDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $sortedBy }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="sortByDropdown">
                                <a class="dropdown-item" href="{{ route('products.index', array_merge($currentQueryStrings, ['sort_by' => 'Recommended'])) }}">Recommended</a>
                                <a class="dropdown-item" href="{{ route('products.index', array_merge($currentQueryStrings, ['sort_by' => 'high-to-low'])) }}">High to Low</a>
                                <a class="dropdown-item" href="{{ route('products.index', array_merge($currentQueryStrings, ['sort_by' => 'low-to-high'])) }}">Low to High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <span class="bg-primary text-white py-1 px-2 rounded-lg" style="font-size: .9rem;">Category: Mixer & Grinder</span>
                    <span class="bg-primary text-white py-1 px-2 rounded-lg" style="font-size: .9rem;">Category: Mixer & Grinder</span>
                    <span class="bg-primary text-white py-1 px-2 rounded-lg" style="font-size: .9rem;">Category: Mixer & Grinder</span>
                    <span class="bg-danger text-white py-1 px-2 rounded-lg" style="font-size: .9rem;">Clear All</span>
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
    @push('scripts')
    <script>
        $('#price-filter').submit(function(event) {
            event.preventDefault();
            let formData = $(this).serialize();
            let fullUrl = "{{ url()->current() . '?' . http_build_query( request()->except(['min_price', 'max_price']) ) }}";
            let formUrl = fullUrl + "&" + formData;
            window.location.href = formUrl;
        });

    </script>

    @endpush
</x-app-layout>
