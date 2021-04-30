<x-app-layout>
    <section>
        <x-frontend.partials.primary-image-slider />
    </section>

    <section class="product_wrap">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> Featured Products </h4>
            </div>
            <div class="row">
                <div class="col-md-4">
                    @foreach($featuredProducts as $product)
                    @break($loop->iteration == 2)
                   <x-frontend.product.featured-product-card :product="$product" />
                    <!-- end of product -->
                    @endforeach
                </div>
                <!-- end of colmd -->
                <div class="col-md-4">
                    <div class="product_img">
                        <div class="carousel-container position-relative row">

                            <!-- Sorry! Lightbox doesn't work - yet. -->

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-slide-number="0">
                                        <img src="{{ asset('theme') }}/images/pdt6_850x.jpg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                    </div>
                                    <div class="carousel-item" data-slide-number="1">
                                        <img src="{{ asset('theme') }}/images/product-6_grande.jpg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                    </div>

                                </div>
                            </div>

                            <!-- Carousel Navigation -->
                            <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row mx-0">
                                            <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                                                <img src="{{ asset('theme') }}/images/pdt6_850x.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                                                <img src="{{ asset('theme') }}/images/product-6_grande.jpg" class="img-fluid" alt="...">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row mx-0">
                                            <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                                                <img src="{{ asset('theme') }}/images/pdt6_850x.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                                                <img src="{{ asset('theme') }}/images/product-6_grande.jpg" class="img-fluid" alt="...">
                                            </div>

                                            <div class="col-2 px-1 py-2"></div>
                                            <div class="col-2 px-1 py-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div> <!-- /row -->

                    </div>
                    <!-- product-img -->
                </div>
                <div class="col-md-4">
                    @foreach($featuredProducts as $product)
                    @break($loop->iteration == 2)
                    <x-frontend.product.featured-product-card :product="$product" />
                    <!-- end of product -->
                    @endforeach
                </div>
                <!-- end of colmd -->
            </div>
        </div>
    </section>


    <section class="product_add">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> Mixer and Grinder</h4>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product_add">
                        <img src="{{ asset('theme') }}/images/banner2a.jpg">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_add">
                        <img src="{{ asset('theme') }}/images/banner2b.jpg">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_add">
                        <img src="{{ asset('theme') }}/images/banner2a.jpg">
                    </div>
                </div>


            </div>
        </div>
    </section>

    @foreach ($categories as $category)
    @if(count($category->products))
    <section class="new_product">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> {{ $category->name }}</h4>
            </div>
            <div class="row">
                @foreach ($category->products as $product)
                <div class="col-md-4">
                    <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @endforeach
</x-app-layout>
