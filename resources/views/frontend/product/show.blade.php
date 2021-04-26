<x-app-layout>
    <x-slot name="pageTitle">{{ $pageTitle }}</x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ $product->name }}
        </x-slot>
        <x-slot name="breadcrumbs">
            {{-- Home / Mixer & Grinder /Products --}}
            {{ Breadcrumbs::render('product', $product) }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container single-product py-3">
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light w-100">
                    <img src="{{ $product->featuredImage->imageUrl() }}" alt="{{ __('') }}">
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
                <div>{{ priceUnit() }} {{ $product->currentPrice() }}</div>
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

        <div class="">
            <div class="bg-light -theme-color p-2">Product Description</div>
            <div>
                <div class="my-2 px-2">
                    <p>Samsung Front load Washing Machine&nbsp;</p>
                    <ul>
                        <li>Design : Silver body color, Crystal Gloss Door, LED Display Panel</li>
                        <li>Water Consumption : 48liters</li>
                        <li>Power source : 230V/50Hz, Power Consumption : ( Min 150watt-450watt) ( Max : 2000watt-2400watt)</li>
                        <li>Features: Eco bubble technology with bubble soak, Voltage Control(165V to 450V), Smart Check, Chile lock, delay End(3hours to 9hours), Diamond Drum, 1200RPM soeed motor, Transparent door</li>
                        <li>Cycle: Super eco wash, 15min quick wash, cotton, e-cotton, Dark garment, baby care, Eco drum clean, Outdoor care, Option list, Rinse+spin, Synthetics, Wool</li>
                        <li>Accessiories: Bolt Spanner, Assy water hose, USer manual, Hose hanger, Liquid Guide, Cap fixers</li>
                        <li>5year warrenty on universal motor.&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="my-3"></div>

        <div class="">
            <div class="bg-light -theme-color p-2">Specifications</div>
            <div>
                <div class="my-2 px-2">
                    <p>Samsung Front load Washing Machine&nbsp;</p>
                    <ul>
                        <li>Design : Silver body color, Crystal Gloss Door, LED Display Panel</li>
                        <li>Water Consumption : 48liters</li>
                        <li>Power source : 230V/50Hz, Power Consumption : ( Min 150watt-450watt) ( Max : 2000watt-2400watt)</li>
                        <li>Features: Eco bubble technology with bubble soak, Voltage Control(165V to 450V), Smart Check, Chile lock, delay End(3hours to 9hours), Diamond Drum, 1200RPM soeed motor, Transparent door</li>
                        <li>Cycle: Super eco wash, 15min quick wash, cotton, e-cotton, Dark garment, baby care, Eco drum clean, Outdoor care, Option list, Rinse+spin, Synthetics, Wool</li>
                        <li>Accessiories: Bolt Spanner, Assy water hose, USer manual, Hose hanger, Liquid Guide, Cap fixers</li>
                        <li>5year warrenty on universal motor.&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
