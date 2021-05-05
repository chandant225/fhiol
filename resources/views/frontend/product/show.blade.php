<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>

    <div id="product-wrapper" class="container single-product py-3">
        <div class="row">
            <div class="col-md-5">
                <div style="position: sticky; top: 15px;">
                    <!-- Main image, on which xzoom will be applied -->
                    <div class="product-main-image-wrapper">
                        <img class="xzoom main-image" id="main_image" src="{{ $product->featuredImage->imageUrl('medium') }}" xoriginal="{{ $product->featuredImage->imageUrl() }}">
                    </div>
                    <!-- Thumbnails -->
                    <div class="image-thumbnail-gallery-wrapper p-2 d-flex mt-2">
                        @foreach($product->images as $image)
                        <div class="flex-shrink-0">
                            <a href="{{ $image->imageUrl() }}">
                                <img class="xzoom-gallery" height="60" src="{{ $image->imageUrl('thumb') }}" xpreview="{{ $image->imageUrl('medium') }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="mt-3 mt-sm-0">
                    {{ Breadcrumbs::render('product', $product) }}
                </div>
                <div>
                    <h6 class="category-name">{{ $product->category->name }}</h6>
                </div>
                <h1 class="product-name text-dark-gray">{{ $product->name }}</h1>
                @hasrole('admin')
                <div>
                    <a class="btn bt-link pl-0" href="{{ route('backend.products.edit', $product) }}">
                        <svg class="mr-1" style="height: 1rem; width: 1rem; color: #874ee8;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span>Edit</span>
                    </a>
                </div>
                @endhasrole
                @if ($product->hasDiscount())
                <h6 class="old-price">{{ priceUnit() }} {{ $product->price }}</h6>
                @endif
                <h3>{{ priceUnit() }} {{ $product->currentPrice() }} <small style="font-size: .9rem;">(Inc. of all taxes)</small></h3>
                @if ($product->hasDiscount())
                <div class="font-italic">You save {{ priceUnit() }} {{ $product->price - $product->currentPrice() }} <span class="text-theme-color">({{ $product->discountPercentage($withPercent = true) }} off)</span></div>
                @endif

                <div class="bg-light p-3 my-3">
                    <a class="btn btn-primary mr-2" href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" target="_blank">
                        <span><i class="fa fa-facebook"></i></span>
                    </a>
                    <a class="btn btn-primary mr-2" href="https://twitter.com/intent/tweet?text={{ request()->url() }}" target="_blank">
                        <span><i class="fa fa-twitter"></i></span>
                    </a>
                    <a class="btn btn-primary mr-2" href="mailto:?subject=Check%20this%20Product&amp;body={{ request()->url() }}" target="_blank">
                        <span><i class="fa fa-envelope"></i></span>
                    </a>
                </div>

                <div>
                    <div>Key Features</div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Ultra Large Capacity 4.5 cu.ft. Washer and 7.4 cu.ft. Dryer</li>
                                <li>Single Unit WashTower™ Design</li>
                                <li>Built-In Intelligence - AI Fabric Sensors/Smart Learner/Smart Pairing™</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Advanced Washing & Drying - TurboWash™ 360°/Allergiene™ wash cycle/ TurboSteam™</li>
                                <li>ThinQ® Technology / Proactive Customer Care</li>
                                <li>Tempered Glass Doors</li>
                            </ul>
                        </div>
                    </div>
                </div>

                @if($product->description)
                <div class="card rounded-0 border-0 shadow-sm">
                    <div class="card-header bg-transparent">
                        <h5 class="mb-0">Product Description</h5>
                    </div>
                    <div class="card-body">
                        <div class="my-2 px-2">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
                @endif

                <div class="my-3"></div>

                @if(count($specifications))
                <div class="card rounded-0 border-0 shadow-sm">
                    <div class="card-header bg-transparent">
                        <h5 class="mb-0">Specifications</h5>
                    </div>
                    <div class="card-body">
                        @foreach($specifications as $specification)
                        <div class="row py-2">
                            <div class="col-md-4">
                                <span class="key" style="color: #878787;">{{ $specification->key }}</span>
                            </div>
                            <div class="col-md-8">
                                <span class="value">{{ $specification->value }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="my-3"></div>
    </div>
    @push('scripts')
    <link rel="stylesheet" href="{{ asset('assets/xzoom/xzoom.css') }}">
    <script src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
    <script>
        $("#main_image, .xzoom-gallery").xzoom({
            position: 'right'
            , Xoffset: 20
            , defaultScale: -1
            , tint: false
            , lens: '#8adaff'
            , lensOpacity: 0.25
            , lensShape: 'circle'
        , });

    </script>
    @endpush
</x-app-layout>
