<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>
    <section class="ribbon">
        <img
            src="https://via.placeholder.com/1350x240.png"
            alt=""
            class="ribbonImage"
        />
    </section>
    <section
        class="product-details py-5"
        style="background-color: #fffafa; margin-bottom: -40px"
    >
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 align-items-center bg-white">
                    <!-- card left -->
                    <div class="product-imgs">
                        <div class="img-showcase">
                            <img
                                class="img-thumbnail"
                                src="{{ $product->featuredImage ? $product->featuredImage->imageUrl() : '/theme/img/news-1.jpg' }}"
                                alt="{{ $product->title }}"
                                id="zoom"
                            />
                        </div>

                        <div class="img-select">
                            <img
                                src="/theme/img/news-1.jpg"
                                width="100%"
                                height="100%"
                                alt="shoe image"
                            />

                            <img src="/theme/img/news-2.jpg" alt="shoe image" />

                            <img
                                src="/theme/img/news-3.jpg"
                                width="100%"
                                height="100%"
                                alt="shoe image"
                            />

                            <img
                                src="/theme/img/news-4.jpg"
                                width="100%"
                                height="100%"
                                alt="shoe image"
                            />
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="col-md-7 col-sm-12 flex-grow-1">
                    <div class="product-content bg-white p-4">
                        <div class="product-brand">
                            <h2 class="product-title">{{ $product->name }}</h2>
                            <img
                                src="https://via.placeholder.com/100x100.png"
                                alt="brand-logo"
                                class="product-logo"
                            />
                        </div>
                        <p class="product-subtitle">lorem Ipsum</p>
                        @hasrole('admin')

                        <div>
                            <small
                                style="
                                    padding: 5px 10px;
                                    background-color: #fffafa;
                                    border-radius: 2.5rem;
                                    color: #555;
                                "
                                >{{ $product->category->name }}</small
                            >
                        </div>

                        <div class="pb-3">
                            <a
                                class="btn btn-success btn-sm"
                                href="{{
                                    route('backend.products.edit', $product)
                                }}"
                                ><i class="fa fa-edit me-2"></i>Edit</a
                            >
                        </div>

                        @endhasrole
                        <div class="floating-inquiry-button">
                            <button
                                class="btn btn-theme-primary px-3"
                                type="button"
                                role="button"
                                data-bs-toggle="modal"
                                data-bs-target="#inquiryModal"
                            >
                                <svg
                                    class="w-6 h-6"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                Inquiry
                            </button>
                        </div>

                        <div
                            class="product-detail d-none d-lg-block d-md-block"
                        >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="productOverview-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#productOverview"
                                        type="button"
                                        role="tab"
                                        aria-controls="productOverview"
                                        aria-selected="true"
                                    >
                                        Product Overview
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="productSpecification-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#productSpecification"
                                        type="button"
                                        role="tab"
                                        aria-controls="productSpecification"
                                        aria-selected="false"
                                    >
                                        Product Specification
                                    </button>
                                </li>

                                {{-- Product details --}}
                                @if($product->detail)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="productDetail-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#productDetail"
                                        type="button"
                                        role="tab"
                                        aria-controls="productDetail"
                                        aria-selected="false"
                                    >
                                        Product Detail
                                    </button>
                                </li>
                                @endif
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="resources-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#resources"
                                        type="button"
                                        role="tab"
                                        aria-controls="resources"
                                        aria-selected="false"
                                    >
                                        Resources
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="productOverview"
                                    role="tabpanel"
                                    aria-labelledby="overview-tab"
                                >
                                    <p>{!! $product->overview !!}</p>
                                    <p>
                                        Checking Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Sint esse
                                        ad magni enim fugit eos natus id!
                                        Voluptas minus laboriosam officiis
                                        tempore ea, harum suscipit est,
                                        assumenda, cupiditate necessitatibus
                                        delectus. lorem Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Quos
                                        libero cupiditate ipsam odio ex incidunt
                                        nihil, hic tenetur ducimus modi cum
                                        laudantium architecto adipisci quibusdam
                                        quam fuga magnam cumque! Nesciunt?Lorem
                                        ipsum dolor sit amet consectetur
                                        adipisicing elit. Magnam molestias
                                        maxime neque consequuntur illum sequi
                                        dicta? Accusamus fugit fugiat illo
                                        labore provident eum inventore
                                        explicabo, unde iure incidunt, esse
                                        nulla?lorem
                                    </p>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="productSpecification"
                                    role="tabpanel"
                                    aria-labelledby="specification-tab"
                                >
                                    whu
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="productDetail"
                                    role="tabpanel"
                                    aria-labelledby="detail-tab"
                                >
                                    ...
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="resources"
                                    role="tabpanel"
                                    aria-labelledby="resources-tab"
                                >
                                    <ol class="resource-download-list">
                                        <li>
                                            <div class="flex">
                                                <span>fileName 1</span>
                                                <button
                                                    class="btn-theme-primary"
                                                >
                                                    <svg
                                                        class="w-6 h-6"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                            clip-rule="evenodd"
                                                        ></path></svg
                                                    >&nbsp;Download
                                                </button>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span>fileName 2</span>
                                                <button
                                                    class="btn-theme-primary"
                                                >
                                                    <svg
                                                        class="w-6 h-6"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                            clip-rule="evenodd"
                                                        ></path></svg
                                                    >&nbsp;Download
                                                </button>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail d-md-none d-lg-none">
                            <div class="product-detail-sm">
                                <h4>Product Overview</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Accusamus error illum quia
                                    alias molestias cumque asperiores, nemo,
                                    ipsam dolor soluta eum fugit consequuntur
                                    nobis? Nobis at tenetur quam eaque corporis.
                                </p>
                            </div>
                            <div class="product-detail-sm">
                                <h4>Product Specification</h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Quo suscipit delectus
                                    voluptatem. Autem qui quae, quisquam id
                                    doloremque ex tenetur libero ipsa fugiat
                                    maxime! Unde possimus placeat repellat odio
                                    rerum.
                                </p>
                            </div>
                            <div class="product-detail-sm">
                                <h4>Product Detail</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aut tenetur fugiat, veniam
                                    commodi tempora hic distinctio reiciendis
                                    iure obcaecati maiores eius consequatur
                                    voluptatum ducimus atque quos corrupti
                                    expedita totam qui.
                                </p>
                            </div>
                            <div class="product-detail-sm">
                                <h4>Resources</h4>
                                <ol class="resource-download-list">
                                    <li>
                                        <div class="flex">
                                            <span>FileName 1</span>
                                            <button class="btn-theme-primary">
                                                <svg
                                                    class="w-6 h-6"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                        clip-rule="evenodd"
                                                    ></path></svg
                                                >&nbsp;Download
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span>FileName 2</span>
                                            <button class="btn-theme-primary">
                                                <svg
                                                    class="w-6 h-6"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                        clip-rule="evenodd"
                                                    ></path></svg
                                                >&nbsp;Download
                                            </button>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <iframe
                        width="100%"
                        height="600"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY"
                    >
                    </iframe>
                </div>
            </div>

            <!-- {{-- Product details --}}
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
            @endif -->
        </div>
    </section>

    {{-- Inquiry Modal --}}
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
                            <livewire:frontend.product-inquiry-form
                                :product="$product"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}

    <div
        class="modal fade"
        id="inquiryModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div
                                class="
                                    col-md-5
                                    d-none d-lg-block
                                    text-white
                                    p-2
                                "
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
                            <div class="col-lg-7 col-xs-12 col-sm-12 p-5">
                                <h3 class="h3-responsive mb-4 font-weight-bold">
                                    Product Inquiry
                                </h3>
                                <livewire:frontend.product-inquiry-form
                                    :product="$product"
                                />
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
        window.addEventListener("show-inquiry-modal", function () {
            console.log("listened by script");
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".img-select img").click(function () {
                let image = $(this).attr("src");
                $(".img-showcase img").attr("src", image);
            });
        });

        function resizeForm() {
            var width =
                window.innerWidth > 0
                    ? window.innerWidth
                    : document.documentElement.clientWidth;
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
