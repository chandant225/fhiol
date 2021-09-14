<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mb-0">
        <div class="container">
            <h2 class="text-center">{{ $product->name }}</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <Section class="product-details py-5" style="backgroundcolor: #fffafa; margin-bottom: -40px;">
        <div class="container">
            <div class="d-sm-flex gap-4">
                <div class="align-items-center bg-white">
                    <!-- card left -->
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <img class="img-thumbnail" src="{{ $product->featuredImage ? $product->featuredImage->imageUrl() : '/theme/img/news-1.jpg' }}" alt="{{ $product->title }}" style="max-width: 500px;">
                                {{-- <img src="/theme/img/news-2.jpg" alt="shoe image">
                                <img src="/theme/img/news-3.jpg" alt="shoe image">
                                <img src="/theme/img/news-4.jpg" alt="shoe image"> --}}
                            </div>
                        </div>
                        {{-- <div class="img-select">
                            <div class="img-item">
                                <a href="" data-id="1">
                                    <img src="/theme/img/news-1.jpg" width="100%" height="100%" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="" data-id="2">
                                    <img src="/theme/img/news-2.jpg" alt="shoe image" width="100%" height="100%">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="" data-id="3">
                                    <img src="/theme/img/news-3.jpg" width="100%" height="100%" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="" data-id="4">
                                    <img src="/theme/img/news-4.jpg" width="100%" height="100%" alt="shoe image">
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- card right -->
                <div class="flex-grow-1">
                    <div class="product-content bg-white p-4">
                        <h2 class="product-title">{{ $product->name }}</h2>
                        @hasrole('admin')
                        <div class="pb-3">
                            <a class="btn btn-success btn-sm" href="{{ route('backend.products.edit', $product) }}"><i class="fa fa-edit me-2"></i>Edit</a>
                        </div>
                        @endhasrole
                        <div>
                            <small style="padding: 5px 10px; background-color: #fffafa; border-radius: 2.5rem; color: #555;">{{ $product->category->name }}</small>
                        </div>
                        <div class="product-detail">
                            <p>{!! $product->overview !!}</p>
                        </div>

                        {{-- Inquiry Button --}}
                        <div>
                            <button class="btn btn-theme-primary w-auto px-5" type="button" role="button" onclick="window.dispatchEvent(new CustomEvent('show-inquiry-modal'))">Inquiry</button>
                        </div>

                        <div class="social-links mt-4 align-items-md-center">
                            <div class="me-2">Share on: </div>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ request()->url() }}" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="mailto:?subject=Check%20this%20Product&amp;body={{ request()->url() }}" target="_blank">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product details --}}
            @if($product->detail)
            <div class="bg-white p-4 mt-4">
                <h5 class="h5-responsive">Product Details</h5>
                {!! $product->detail !!}
            </div>
            @endif

            {{-- Product Specification --}}
            @if($product->description)
            <div class="bg-white p-4 mt-4">
                <h5 class="h5-responsive">Product Specification</h5>
                {!! $product->description !!}
            </div>
            @endif
        </div>
    </Section>

    {{-- Inquiry Modal --}}
    <div id="inquiry-modal" class="animate__animated animate__faster" x-data="{ show: false }" x-show="show" x-transition:enter="animate__fadeIn" x-transition:leave="animate__fadeOut" x-cloak>
        <div class="content-wrapper" x-on:show-inquiry-modal.window="show = true" x-on:close-inquiry-modal.window="show = false">
            <div class="content bg-white rounded shadow overflow-hidden" style="width: 800px;" @away="show = false">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 text-white p-5" style="background-color: #8e24aa;">
                            <img class="img-fluid" src="{{ $product->featuredImage ? $product->featuredImage->imageUrl('medium') : image_placeholder_url() }}" alt="{{ $product->name }}">
                            <h5 class="h5-responsive text-center mt-3">{{ $product->name }}</h5>
                        </div>
                        <div class="col-md-7 p-5">
                            <h3 class="h3-responsive mb-4 font-weight-bold">Product Inquiry</h3>
                            <livewire:frontend.product-inquiry-form :product="$product"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <style>
        #inquiry-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 100;
            color: #232343;
        }

        #inquiry-modal .content-wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 00, 0.1)
        }

    </style>
    <script>
        window.addEventListener('show-inquiry-modal', function() {
            console.log('listened by script');
        })
    </script>
    @endpush
</x-app-layout>
