<x-app-layout>
    <x-slot name="pageTitle">{{ $pageTitle }}</x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ $product->name }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('product', $product) }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container single-product py-3">
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light w-100">
                    <img src="{{ $product->featuredImage->imageUrl() }}" alt="{{ $product->name }}">
                </div>
                <div class="my-3"></div>
                <div class="bg-light w-100 p-2 d-flex overflow-x-scroll">
                    @foreach($product->images as $image)
                    <img class="mr-2 border" src="{{ $image->imageUrl() }}" alt="{{ $product->name }}" style="height: 80px;">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h6>{{ $product->category->name }}</h6>
                <h1 class="text-dark-gray">{{ $product->name }}</h1>
                @if ($product->hasDiscount())
                <div>Offer Price: {{ priceUnit() }} {{ $product->currentPrice() }} (Inc. of all taxes)</div>
                @endif
                <h3>{{ priceUnit() }} {{ $product->currentPrice() }}</h3>
                @if ($product->hasDiscount())
                <div>You save {{ priceUnit() }} {{ $product->price }} <span class="text-theme-color">({{ $product->discountPercentage($withPercent = true) }} off)</span></div>
                @endif

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

            </div>
        </div>

        <div class="my-3"></div>

        @if($product->description)
        <div class="">
            <div class="bg-light -theme-color p-2">Product Description</div>
            <div>
                <div class="my-2 px-2">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
        @endif

        <div class="my-3"></div>

        @if(count($specifications))
        <div class="">
            <div class="bg-light -theme-color p-2">Specifications</div>
            <div>
                <table class="table table-hover">
                    @foreach($specifications as $specification)
                    <tr>
                        <td>
                            <span class="key">{{ $specification->key }}</span>
                        </td>
                        <td>
                            <span class="value">{{ $specification->value }}</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>
