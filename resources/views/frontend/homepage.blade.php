<x-app-layout>
    <!-- Hero -->
    <div class="hero-bg">
        <x-frontend.partials.primary-image-slider></x-frontend.partials.primary-image-slider>

        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="banner-slogon">
                <div class="container pt-4">
                    <div class="row">
                        <div class="col-md-11 m-auto">
                            <p class="text-center">
                                The Fred Hollows Intraocular lens Laboratory (FH
                                IOL Lab), has been striving for excellence in
                                intraocular lenses (IOLs) manufacturing and has
                                been producing innovative and superior
                                intraocular lens designs and supporting products
                                since its inception in 1995. Initiated by The
                                Fred Hollows Foundation in Australia, its
                                products are sold to almost 30 countries around
                                the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero-end -->

    {{-- About section --}}
    <section class="about-hollows">
        <div class="container">
            <div class="title-left">
                <h4>About Fred Hollows</h4>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div data-aos="zoom-in-right">
                        <img src="https://fhiol.com/sites/default/files/fred.jpg" alt="" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div data-aos="zoom-in-left">
                        <div class="content-title">
                            Fred Hollows: Life, Work and Legacy
                        </div>
                        <div class="content-title-sub">Fred once said,</div>
                        <p>
                            " I studied medicine so I could help others-set a
                            leg or whatever and its given me a great deal of
                            satisfaction." But setting legs was not what
                            Professor Fred Hollows ended up doing...
                            <br />
                            <br />

                            Fred had done an eye term at medical school and, as
                            a result, he assisted eye surgeons at Auckland
                            Public Hospital in his first job after graduating.
                            <br />
                            <br />

                            At the same time, he had growing interest in
                            practicing in Africa- "there seemed to be a crying
                            need for properly run clinics, free of political or
                            church influence" - and someone told him if you were
                            to be useful in Africa you had to know how take out
                            cataract because there was a lot of cataract
                            blindness."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hollows-end -->

    <!-- service -->
    <div class="service">
        <div class="container">
            <div class="title-right">
                <h4>OUR EXCELLENCE</h4>
            </div>
            <div class="row align-items-stretch">
                @php
                $programKeys = ['hp_our_excellence_one_', 'hp_our_excellence_two_', 'hp_our_excellence_three_', 'hp_our_excellence_four_']
                @endphp
                @foreach ($programKeys as $key)
                <div class="col-md-3 mb-3">
                    <div class="h-100" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-box h-100">
                            <a href="{{ appSettings($key . 'link', '#') }}">
                                <div class="service-box-inner">
                                    <i>{!! appSettings($key . 'icon') !!}</i>
                                    <h5>{{ appSettings($key . 'title') }}</h5>
                                    <br />
                                    <p>
                                        {{ appSettings($key . 'desc') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service-end -->

    <!-- testimonial -->
    <div class="testimonial">
        <section class="testimonial-section d-flex align-items-center">
            <div class="container">
                <div class="title-left">
                    <h4>{{ appSettings('homepage_testimonials_title', 'Testimonial') }}</h4>
                </div>
                <div class="container mt-5">
                    <div class="owl-carousel owl-theme testimonial-slider">
                        @foreach($testimonials as $testimonial)
                        <div class="card">
                            <div class="content py-5 px-3 text-center mb-4">
                                <p>
                                    {!! $testimonial->content !!}
                                </p>
                            </div>
                            <div class="about text-center p-4 text-white">
                                <img alt="{{ $testimonial->client_name }}" class="rounded-circle" src="{{ $testimonial->clientPhotoUrl() }}" width="60" />
                                <h4 class="mb-0 mt-3">{{ $testimonial->client_name }}</h4>
                                <span>{{ $testimonial->client_title }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- testimonial-end -->

    <!-- News and Events -->
    <section class="newsAndletter">
        <div class="container">
            <div class="title-right">
                <h4>Recent News And Events</h4>
            </div>

            <div class="row">
                @foreach ($newsAndUpdates as $post)
                <div class="col-md-4">
                    <div class="h-100 shadow rounded overflow-hidden">
                        <div class="post-card card mb-3 border-0">
                            <a class="image-wrapper" href="{{ route('posts.show', $post) }}">
                                <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                            </a>
                            <div class="card-body px-md-4 px-lg-5">
                                <h5 class="card-title post__title"><a class=" line-clamp-2" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h5>
                                <p class="card-text"><small class="text-muted">Published at {{ $post->created_at->format('d, M Y') }}</small></p>
                                <p class="card-text line-clamp-3">{{ $post->seo_description }}</p>
                                <a href="#" class="btn btn-theme-primary btn-sm stretched-link">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- News and Events-end -->

    <!-- Modal -->
    <div class="modal fade" id="popUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pop Up Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    pop up content here
                </div>

            </div>
        </div>
    </div>


    @push('scripts')
    <script>
        // testimonials
        const myCarousel = document.getElementById("myCarousel");
        myCarousel.addEventListener("slid.bs.carousel", function() {
            const activeItem = this.querySelector(".active");
            document.querySelector(".testi-img img").src =
                activeItem.getAttribute("data-img");
            document.querySelector(".testi-img .circle").style.backgroundColor =
                activeItem.getAttribute("data-color");
        });

    </script>
    <script>
        $(document).ready(function() {
            let delay = 2000;
            if (sessionStorage.getItem('popState') != 'shown') {
                $("#popUp").delay(delay).modal('show');
                sessionStorage.setItem('popState', 'shown')
            }
        });

    </script>

    @endpush
</x-app-layout>
