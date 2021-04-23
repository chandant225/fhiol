<x-app-layout>
    <x-slot name="siteTitle">
        Products | {{ config('app.name') }}
    </x-slot>

    <div class="container py-3">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-dark-gray">Filters</h4>

                <x-frontend.partials.block-title-box title="Product Categories" />

                <ul class="product__category__list my-3">
                    <li>
                        <a href="#">Mixer & Grinder</a>
                    </li>
                    <li class="item">
                        <a href="#">Rice Cooker
                            <span class="float-right"></span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">Washing Machine</a>
                    </li>
                    <li class="item">
                        <a href="#">Refrigenator</a>
                    </li>
                    <li class="item">
                        <a href="#">Irons</a>
                    </li>
                    <li class="item">
                        <a href="#">Hair Dryer</a>
                    </li>
                </ul>

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
                    <button class="btn btn-danger btn-sm bg-theme-color rounded-0 px-3 px-md-4">Filter</button>
                </form>

            </div>
            <div class="col-md-9">
                <div>
                    <h4 class="section-text__dark__gray">Our Products</h4>
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
