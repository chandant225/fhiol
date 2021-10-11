<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>
    <section class="ribbon">
        <div class="ribbonImage" style="background-image: url('{{ get_uploads_url($product->banner_image) }}')">
        </div>
    </section>

    <section class="product-details py-5" style="background-color: #fffafa; margin-bottom: -40px">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 align-items-center bg-white">
                    <!-- card left -->
                    <div class="product-imgs">
                        <div class="img-showcase">
                            <img class="img-thumbnail" src="{{ $product->featuredImage ? $product->featuredImage->imageUrl() : '/theme/img/news-1.jpg' }}" alt="{{ $product->title }}" id="zoom" />
                        </div>

                        <div class="img-select">
                            @foreach($product->images as $productImage)
                            <img src="{{ $productImage->imageUrl('original') }}" width="100%" height="100%" alt="{{ $product->name }}" />
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="col-md-7 col-sm-12 flex-grow-1">
                    <div class="product-content bg-white p-4">
                        <div class="product-brand">
                            <h2 class="product-title">{{ $product->name }}</h2>
                        </div>
                        <div class="d-flex">
                            <div>
                                <p class="product-subtitle">
                                    {{ $product->sub_title }}
                                </p>
                                @if($product->brand_logo)
                                <div class="ms-auto">
                                    <img src="{{ get_uploads_url($product->brand_logo) }}" alt="brand-logo" class="{{ $product->name }}" style="max-height: 60px;" />
                                </div>
                                @endif

                                @hasrole('admin')
                                <div>
                                    <div>
                                        <small style="padding: 5px 10px;background-color: #fffafa;border-radius: 2.5rem;color: #555;">{{ $product->category->name }}</small>
                                    </div>
                                    <div class="my-3">
                                        <a class="btn btn-success btn-sm" href="{{
                                    route('backend.products.edit', $product)
                                }}"><i class="fa fa-edit me-2"></i>Edit</a>
                                    </div>
                                </div>

                                @endhasrole
                            </div>
                        </div>

                        {{-- Inquiry Button --}}
                        <div class="floating-inquiry-button">
                            <button class="btn btn-theme-primary px-3" type="button" role="button" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                                Product Inquiry
                            </button>
                        </div>

                        <div class="product-detail d-none d-lg-block d-md-block">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="productOverview-tab" data-bs-toggle="tab" data-bs-target="#productOverview" type="button" role="tab" aria-controls="productOverview" aria-selected="true">
                                        Product Overview
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="productSpecification-tab" data-bs-toggle="tab" data-bs-target="#productSpecification" type="button" role="tab" aria-controls="productSpecification" aria-selected="false">
                                        Product Specification
                                    </button>
                                </li>

                                {{-- Product details --}}
                                @if($product->detail)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="productDetail-tab" data-bs-toggle="tab" data-bs-target="#productDetail" type="button" role="tab" aria-controls="productDetail" aria-selected="false">
                                        Product Detail
                                    </button>
                                </li>
                                @endif
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="productOverview" role="tabpanel" aria-labelledby="overview-tab">
                                    {!! $product->overview !!}
                                </div>
                                <div class="tab-pane fade" id="productSpecification" role="tabpanel" aria-labelledby="specification-tab">
                                    {!! $product->description !!}
                                </div>
                                <div class="tab-pane fade" id="productDetail" role="tabpanel" aria-labelledby="detail-tab">
                                    {!! $product->detail !!}
                                </div>
                            </div>
                        </div>

                        {{-- Detail Mobile View --}}
                        <div class="product-detail d-md-none d-lg-none">
                            <div class="product-detail-sm">
                                <h4>Product Overview</h4>
                                <p>{!! $product->overview !!}</p>
                            </div>
                            <div class="product-detail-sm">
                                <h4>Product Specification</h4>
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div class="product-detail-sm">
                                <h4>Product Detail</h4>
                                <p>{!! $product->detail !!}</p>
                            </div>
                        </div>

                        {{-- Downloads section --}}
                        <section class="mt-4 mt-md-5">
                            <h6>Downloads</h6>
                            <ol class="resource-download-list">
                                @foreach ($product->downloads as
                                $download)
                                <li>
                                    <div class="flex">
                                        <span>{{ $download->title }}</span>
                                        <a href="{{ $download->downloadUrl() }}" class="
                                                btn btn-theme-primary
                                            ">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path>
                                            </svg>&nbsp;Download
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ol>
                        </section>

                    </div>
                </div>

                @if($product->video_url)
                <div class="col-md-12 my-5">
                    <div class="product-video">
                        <iframe width="100%" height="100%" src="{{ $product->youtubeUrl() }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    {{--
    <div
        id="inquiry-modal"
        class="animate__animated animate__faster"
        x-data="{ show: false }"
        x-show="show"
        x-transition:enter="animate__fadeIn"
        x-transition:leave="animate__fadeOut"
        x-cloak
    >
        <div
            class="content-wrapper"
            x-on:show-inquiry-modal.window="show = true"
            x-on:close-inquiry-modal.window="show = false"
        >
            <div
                class="
                    clickableModal
                    content
                    bg-white
                    rounded
                    shadow
                    overflow-hidden
                "
                style="width: 800px"
                @away="show = false"
            >
                <div class="container-fluid">
                    <div class="row">
                        <div
                            class="col-md-5 text-white p-5"
                            style="background-color: #8e24aa"
                        >
                            <img
                                class="img-fluid"
                                src="{{ $product->featuredImage ? $product->featuredImage->imageUrl('medium') : image_placeholder_url() }}"
    alt="{{ $product->name }}"
    />
    <h5 class="h5-responsive text-center mt-3">
        {{ $product->name }}
    </h5>
    </div>
    <div class="col-md-7 p-5">
        <h3 class="h3-responsive mb-4 font-weight-bold">
            Product Inquiry
        </h3>
        <livewire:frontend.product-inquiry-form :product="$product" />
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    --}}

    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 d-none d-lg-flex p-2">
                                <div class="align-self-center">
                                    <img class="img-fluid" src="{{ $product->featuredImage ? $product->featuredImage->imageUrl('medium') : image_placeholder_url() }}" alt="{{ $product->name }}" />
                                    <h5 class="h5-responsive text-center mt-3" style="
                                            font-weight: 700;
                                            letter-spacing: 1px;
                                        ">
                                        {{ $product->name }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xs-12 col-sm-12 p-5">
                                <h3 class="h3-responsive mb-4 font-weight-bold">
                                    Product Inquiry
                                </h3>
                                <livewire:frontend.product-inquiry-form :product="$product" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <!-- <style>
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
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style> -->
    <script>
        window.addEventListener("show-inquiry-modal", function() {
            console.log("listened by script");
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".img-select img").click(function() {
                let image = $(this).attr("src");
                $(".img-showcase img").attr("src", image);
            });
        });

        function resizeForm() {
            var width =
                window.innerWidth > 0 ?
                window.innerWidth :
                document.documentElement.clientWidth;
            if (width > 1024) {
                $("#zoom").imagezoomsl({
                    loadopacity: 0.1,
                });
            } else {
                null;
            }
        }
        window.onresize = resizeForm;
        resizeForm();
    </script>
    @endpush
</x-app-layout>
