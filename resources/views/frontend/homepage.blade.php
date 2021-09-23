<x-app-layout>

    <!-- Hero -->
    <div class="hero-bg">
        <div class="hero-slider">
            <div class="row col-12 p-0 m-0">
                <div id="carouselExampleCaptions" class="carousel slide p-0" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/theme/img/banner/banner01.jpg" class="d-block w-100 " alt="...">
                            <div class="overlay">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/theme/img/banner/banner02.jpg" class="d-block w-100" alt="...">
                            <div class="overlay">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/theme/img/banner/banner03.jpg" class="d-block w-100" alt="...">
                            <div class="overlay">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="banner-slogon">
                <div class="container pt-4">
                    <div class="row">
                        <div class="col-md-11 m-auto">
                            <p class="text-center">The Fred Hollows Intraocular lens Laboratory (FH IOL Lab), has been
                                striving for excellence
                                in intraocular lenses (IOLs) manufacturing and has been producing innovative and
                                superior
                                intraocular lens designs and supporting products since its inception in 1995. Initiated
                                by
                                The Fred Hollows Foundation in Australia, its products are sold to almost 30 countries
                                around the world.</p>
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
                        <img src="https://fhiol.com/sites/default/files/fred.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div data-aos="zoom-in-left">
                        <div class="content-title">Fred Hollows: Life, Work and Legacy</div>
                        <div class="content-title-sub">Fred once said,</div>
                        <p>"
                            I studied medicine so I could help others-set a leg or whatever and its given me a great
                            deal of
                            satisfaction." But setting legs was not what Professor Fred Hollows ended up doing...
                            <br>
                            <br>

                            Fred had done an eye term at medical school and, as a result, he assisted eye surgeons at
                            Auckland Public
                            Hospital in his first job after graduating.
                            <br>
                            <br>

                            At the same time, he had growing interest in practicing in Africa- "there seemed to be a
                            crying
                            need for
                            properly run clinics, free of political or church influence" - and someone told him if you
                            were
                            to be useful
                            in Africa you had to know how take out cataract because there was a lot of cataract
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
            <div class="row">
                <div class="col-md-3">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-box">
                            <a href="{{route('latestmachine')}}">
                                <div class="service-box-inner">
                                    <span class="material-icons orange600">precision_manufacturing</span>
                                    <h5>LATEST MACHINES</h5>
                                    <br>
                                    <p>Equipped with the latest innovation in computer controlled lens production equipment
                                        with...</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div data-aos="fade-up" data-aos-duration="1100">
                        <div class="service-box">
                            <a href="{{route('iol')}}">

                                <div class="service-box-inner">
                                    <span class="material-icons orange600">biotech</span>
                                    <h5>BEST IOL DESIGNS</h5>
                                    <br>
                                    <p>Having alliance with leading IOL design experts and medical research teams, the
                                        laboratory is in...</p>
                                </div>
                            </a>

                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div data-aos="fade-up" data-aos-duration="1200">
                        <div class="service-box">

                            <a href="{{route('qualitycertificate')}}">

                                <div class="service-box-inner">

                                    <span class="material-icons orange600">approval</span>
                                    <h5>QUALITY CERTIFICATION</h5>
                                    <br>
                                    <p>Adherence to the Highest Quality Standards is a consistent feature...</p>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <a href="{{route('country')}}">
                            <div data-aos="fade-up" data-aos-duration="1300">
                                <div class="service-box-inner">
                                    <span class="material-icons orange600">flight_takeoff</span>
                                    <h5>Over 30 countries</h5>
                                    <br>
                                    <p>FH IOL Lab has exported its products world-wide to over 30 countries in Asia,
                                        Australia,
                                        South...</p>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-end -->

    <!-- testimonial -->
    <div class="testimonial">
        <section class="testimonial-section d-flex align-items-center">
            <div class="container">
                <div class="title-left">
                    <h4>Testimonial</h4>
                </div>
                <div class="row align-items-center col-12">
                    <div class="col-md-6 testi-img">
                        <div class="img-box">
                            <div class="circle"></div>
                            <div class="img-box-inner">
                                <img src="/theme/img/testimonial/1.png" alt="testi img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="myCarousel" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item testi-item active" data-color="#fb9c9a" data-img="theme/img/testimonial/1.png">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                        doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                        illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                    <h3> Prof. M. Edward Wilson - <span>MD, USA</span></h3>
                                </div>
                                <div class="carousel-item testi-item" data-color="#fbd39a" data-img="theme/img/testimonial/2.png">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                        doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                        illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                    <h3>Prof. David J. Apple <span> MD, USA</span></h3>
                                </div>
                                <div class="carousel-item testi-item" data-color="#9ab0fb" data-img="theme/img/testimonial/3.png">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                        doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                        illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                    <h3> Prof. M. Edward Wilson - <span>MD, USA</span></h3>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <img src="/theme/img/icons/left-arrow.png" alt="prev">
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <img src="/theme/img/icons/right-arrow.png" alt="prev">
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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
                <!-- Post-->
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <a href="publicationdetails.html" class=" text-decoration-none">
                            <div class=" post-module">
                                <div class="category">10 FEB. 2021</div>
                                <!-- Thumbnail-->
                                <div class="thumbnail">

                                    <img src="/theme/img/news-1.jpg" />
                                </div>
                                <!-- Post Content-->
                                <div class="post-content">

                                    <h1 class="title">City Lights in New York</h1>
                                    <h2 class="sub_title">The city that never sleeps.</h2>
                                    <p class="description">New York, the largest city in the U.S., is an
                                        architectural
                                        marvel
                                        with
                                        plenty of historic monuments, magnificent buildings and countless
                                        dazzling
                                        skyscrapers.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-xl-4 col-md-6 col-12 news-respon">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <a href="publicationdetails.html" class=" text-decoration-none">
                            <div class=" post-module">
                                <div class="category">10 FEB. 2021</div>
                                <!-- Thumbnail-->
                                <div class="thumbnail">

                                    <img src="/theme/img/news-1.jpg" />
                                </div>
                                <!-- Post Content-->
                                <div class="post-content">

                                    <h1 class="title">City Lights in New York</h1>
                                    <h2 class="sub_title">The city that never sleeps.</h2>
                                    <p class="description">New York, the largest city in the U.S., is an
                                        architectural
                                        marvel
                                        with
                                        plenty of historic monuments, magnificent buildings and countless
                                        dazzling
                                        skyscrapers.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-xl-4 col-md-6 col-12 news-respon">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <a href="publicationdetails.html" class=" text-decoration-none">
                            <div class=" post-module">
                                <div class="category">10 FEB. 2021</div>
                                <!-- Thumbnail-->
                                <div class="thumbnail">

                                    <img src="/theme/img/news-1.jpg" />
                                </div>
                                <!-- Post Content-->
                                <div class="post-content">

                                    <h1 class="title">City Lights in New York</h1>
                                    <h2 class="sub_title">The city that never sleeps.</h2>
                                    <p class="description">New York, the largest city in the U.S., is an
                                        architectural
                                        marvel
                                        with
                                        plenty of historic monuments, magnificent buildings and countless
                                        dazzling
                                        skyscrapers.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
            <!-- Hover Demo-->


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

    //testi
    const myCarousel = document.getElementById("myCarousel");
    myCarousel.addEventListener("slid.bs.carousel", function () {
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
    if(sessionStorage.getItem('popState') != 'shown'){
        $("#popUp").delay(delay).modal('show');
        sessionStorage.setItem('popState','shown')
    }
});
    </script>
    @endpush
</x-app-layout>
