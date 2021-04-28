<x-app-layout>
    <x-slot name="siteTitle">
        Products | {{ appSettings('site_name') }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Products
        </x-slot>
        <x-slot name="breadcrumbs">
            {{-- Home / Mixer & Grinder /Products --}}
            {{ Breadcrumbs::render('products') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                {{-- <h4 class="text-dark-gray">Filters</h4> --}}

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
                        32 items found
                    </div>
                    <div class="ml-auto">
                        <select name="" class="custom-select">
                            <option value="">Recommended</option>
                            <option value="">High to Low</option>
                            <option value="">Low to High</option>
                        </select>
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
