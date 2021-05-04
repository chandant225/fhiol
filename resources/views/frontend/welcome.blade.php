<x-app-layout>
    <section>
        <x-frontend.partials.primary-image-slider />
    </section>

    {{-- Badges --}}
    <section style="background-color: #051528; color: #ececec;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div style="font-size: 3rem; color: #f4a328;"><i class="fa fa-truck"></i></div>
                    <div>Free Shipping</div>
                    <small>Free shipping all over Nepal</small>
                </div>
                <div class="col-md-3 text-center">
                    <div style="font-size: 3rem; color: #f4a328;"><i class="fa fa-headphones"></i></div>
                    <div>24/7 Support</div>
                    <small>Lorem ipsum dolor sit amet</small>
                </div>
                <div class="col-md-3 text-center">
                    <div style="font-size: 3rem; color: #f4a328;"><i class="fa fa-handshake-o"></i></div>
                    <div>Warranty & Services Shipping</div>
                    <small>Lorem ipsum dolor sit amet</small>
                </div>
                <div class="col-md-3 text-center">
                    <div style="font-size: 3rem; color: #f4a328;"><i class="fa fa-star-o"></i></div>
                    <div>Official Brand Store</div>
                    <small>Free shipping all over Nepal</small>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Products --}}
    @if(count($featuredProducts))
    <section class="new_product">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> {{ _('Featured Products') }}</h4>
            </div>
            <div class="row">
                @foreach ($featuredProducts as $product)
                <div class="col-md-4">
                    <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Just Launched --}}
    @if(count($newProducts))
    <section class="new_product">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> {{ __('Just Launched') }}</h4>
            </div>
            <div class="row">
                @foreach ($newProducts as $product)
                <div class="col-md-4">
                    <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- About --}}
    <section class="bg-light mb-5">
        <div class="container py-5">
            <h2 class="text-center">About Better</h2>
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </section>
</x-app-layout>
