<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

    <!-- header -->
    <div class="header" id="header">
        <div class="top-bar">
            <div class="container closed" id="top-bar">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="socail-links">
                            <ul>
                                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="right-top  justify-content-end">
                            <li><a href="#"><i class="fa fa-clock-o"></i>Sun - Fri : 09:00 - 18:30</a></li>
                            <li><a href="http://www.tel.com"><i class="fa fa-phone"></i> +977 9802347282</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="topbar-toggler" onclick="toggleHeader()">
                <span class="fa fa-chevron-down"></span>
            </div>
        </div>
        <div class="main-menu">
            <div class="container-fluid p-0 m-0">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid align-items-center">
                        <a class="navbar-brand" href="#"><img src="/theme/img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="about.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="about.html">About Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Products
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Foldable</a></li>
                                        <br>
                                        <li><a class="dropdown-item" href="#">PMMA</a></li>
                                        <br>
                                        <li><a class="dropdown-item" href="#">CTR</a></li>
                                        <br>
                                        <li><a class="dropdown-item" href="#">Lens Injection System</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Publication
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                                </li>

                            </ul>
                            <form class="d-flex ms-4">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success " type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- header-end -->

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
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/theme/img/banner/banner02.jpg" class="d-block w-100" alt="...">
                            <div class="overlay">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/theme/img/banner/banner03.jpg" class="d-block w-100" alt="...">
                            <div class="overlay">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
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
        <div data-aos="fade-up" data-aos-duration="3000">
            <div class="banner-slogon">
                <div class="container">
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

    <!-- About Hollows -->
    <section class="about-hollows">
        <div class="container">
            <div class="title-left">About Fred Hollows</div>
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
            <div class="title-right">Our Services</div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <div class="service-box">
                            <div class="service-box-inner">
                                <span class="material-icons orange600">precision_manufacturing</span>
                                <h5>LATEST MACHINES</h5>
                                <br>
                                <p>Equipped with the latest innovation in computer controlled lens production equipment
                                    with...</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div data-aos="fade-up" data-aos-duration="2500">
                        <div class="service-box">
                            <div class="service-box-inner">
                                <span class="material-icons orange600">biotech</span>
                                <h5>BEST IOL DESIGNS</h5>
                                <br>
                                <p>Having alliance with leading IOL design experts and medical research teams, the
                                    laboratory is in...</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <div class="service-box">
                            <div class="service-box-inner">

                                <span class="material-icons orange600">approval</span>
                                <h5>QUALITY CERTIFICATION</h5>
                                <br>
                                <p>Adherence to the Highest Quality Standards is a consistent feature...</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="service-box">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="service-box-inner">
                                <span class="material-icons orange600">flight_takeoff</span>
                                <h5>Over 30 countries</h5>
                                <br>
                                <p>FH IOL Lab has exported its products world-wide to over 30 countries in Asia,
                                    Australia,
                                    South...</p>
                            </div>
                        </div>

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
                <div class="title-left">Testimonial</div>
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
                                <div class="carousel-item testi-item active" data-color="#fb9c9a" data-img="/theme/img/testimonial/1.png">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                        doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                        illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                    <h3> Prof. M. Edward Wilson - <span>MD, USA</span></h3>
                                </div>
                                <div class="carousel-item testi-item" data-color="#fbd39a" data-img="/theme/img/testimonial/2.png">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                        doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                        illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                    <h3>Prof. David J. Apple <span> MD, USA</span></h3>
                                </div>
                                <div class="carousel-item testi-item" data-color="#9ab0fb" data-img="/theme/img/testimonial/3.png">
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
            <div class="title-right">Recent News And Events</div>
            <div class="row">
                <!-- Post-->
                <div class="col-md-3">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <div class=" post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                </div>
                                <img src="/theme/img/news-1.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">City Lights in New York</h1>
                                <h2 class="sub_title">The city that never sleeps.</h2>
                                <p class="description">New York, the largest city in the U.S., is an architectural
                                    marvel
                                    with
                                    plenty of historic monuments, magnificent buildings and countless dazzling
                                    skyscrapers.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3 news-respon">
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">10</div>
                                    <div class="month">April</div>
                                </div>
                                <img src="/theme/img/news-3.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">City Lights in New York</h1>
                                <h2 class="sub_title">The city that never sleeps.</h2>
                                <p class="description">New York, the largest city in the U.S., is an architectural
                                    marvel
                                    with
                                    plenty of historic monuments, magnificent buildings and countless dazzling
                                    skyscrapers.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  news-respon">
                    <div data-aos="fade-up" data-aos-duration="2500">
                        <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">28</div>
                                    <div class="month">jun</div>
                                </div>
                                <img src="/theme/img/news-2.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">City Lights in New York</h1>
                                <h2 class="sub_title">The city that never sleeps.</h2>
                                <p class="description">New York, the largest city in the U.S., is an architectural
                                    marvel
                                    with
                                    plenty of historic monuments, magnificent buildings and countless dazzling
                                    skyscrapers.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  news-respon">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">10</div>
                                    <div class="month">sep</div>
                                </div>
                                <img src="/theme/img/news-4.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">City Lights in New York</h1>
                                <h2 class="sub_title">The city that never sleeps.</h2>
                                <p class="description">New York, the largest city in the U.S., is an architectural
                                    marvel
                                    with
                                    plenty of historic monuments, magnificent buildings and countless dazzling
                                    skyscrapers.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Hover Demo-->


        </div>
    </section>
    <!-- News and Events-end -->

    <!-- Footer Top Strip -->
    <div class="top-strip ">
        <div class="container">
            <div class="row vertical-align col-12">

                <div class="col-md-12 vertical-middle visible-block-sm-xs marbot30-sm-xs">
                    <div data-aos="fade-up" data-aos-duration="4000">
                        <div class="text-center marbot0 media">
                            <span class="media-left"><i class="fa fa-phone icon-bordered"></i></span>
                            <span class="media-body text-left media-middle">
                                If you Have Any Questions Call Us On <a href="#"><span class="bold">+977
                                        9808946757</span></a>
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Footer Top Strip -->

    <!-- footer -->
    <footer id="footer">
        <div class="footer">
            <div class="container">

                <div class="row col-12">
                    <div class="col-md-3 col-sm-6 marbot50-md-xs ">
                        <h4 class="footer-title">Who We Are </h4>
                        <p class="fontresize">
                            <strong>Fred Hollows</strong> offers a complete range of eye care services including
                            <strong>LASIK and PRK</strong> refractive surgery, eye exams, vision testing for glasses
                            and contacts Lenses.
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 marbot50-md-xs ">
                        <div class="f-type2-address">
                            <h4 class="footer-title">Contact Details </h4>
                            <div class="footer-call">
                                <div class="media marbot20">
                                    <div class="media-left">
                                        <i class="material-icons me-3">add_location</i>
                                    </div>
                                    <div class="media-body">
                                        <p class="fontresize marbot0">
                                            #123 6th Avenue cross street, <br> Princeton, NJ 36310
                                        </p>
                                    </div>
                                </div>

                                <div class="media marbot20">
                                    <div class="media-left">
                                        <i class="material-icons me-3">phone</i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#"> +1-234-567-8900</a> <br>
                                        <a href="#">(255)-567-1234</a>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <i class="material-icons me-3">event_available</i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">info@domainname.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 marbot30-md-xs ">
                        <h4 class="footer-title"> quick links </h4>
                        <div class="clearfix">
                            <ul class="list-type1">
                                <li><a href="services01.htm">Cornea Services</a></li>
                                <li><a href="services01.htm">Glaucoma Services</a></li>
                                <li><a href="services01.htm">Retina Services</a></li>
                                <li><a href="services01.htm">Refractive Services</a></li>
                                <li><a href="services-tab.htm">Contact Lenses</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="clearfix table-min marbot30-md-xs">
                            <h4 class="footer-title">Working Hours</h4>
                            <!-- Timing 1 -->
                            <dl class="dl-horizontal">
                                <dt>SUN</dt>
                                <dd>8:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 1 -->

                            <!-- Timing 2 -->
                            <dl class="dl-horizontal">
                                <dt>MON</dt>
                                <dd>8:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 2 -->

                            <!-- Timing 3 -->
                            <dl class="dl-horizontal">
                                <dt>TUE</dt>
                                <dd>8:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 3 -->

                            <!-- Timing 4 -->
                            <dl class="dl-horizontal">
                                <dt>WED</dt>
                                <dd>8:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 4 -->

                            <!-- Timing 5 -->
                            <dl class="dl-horizontal">
                                <dt>THUR</dt>
                                <dd>8:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 5 -->

                            <!-- Timing 6 -->
                            <dl class="dl-horizontal marbot0">
                                <dt>FRI </dt>
                                <dd>8:00 AM - 2:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal marbot0">
                                <dt>SAT</dt>
                                <dd>Closed</dd>
                            </dl>
                            <!-- Timing 6 -->
                        </div>
                    </div>


                </div>

                <div class="border-seperator"></div>
                <div class="row align-items-center col-12">
                    <div class="col-md-6 ">
                        <div class="footer-bottom-strip">
                            <div class="copyright marbot30-md-xs">
                                Copyright © 2021 <span class="bold">Digital Terai</span>. All Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="clearfix">
                            <ul class="footer-strip-menu ">
                                <li><a href="index.htm">Home</a></li>
                                <li><a href="about.htm">About Us</a></li>
                                <li><a href="services01.htm">Products </a></li>
                                <li><a href="before-after-4-column.htm">Publication</a></li>
                                <li><a href="contact-single-v1.htm">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back To Top -->
            <div class="footer-strip animatedParent">
                <a href="#" data-html="true" title="" data-toggle="tooltip" class="back-to-top text-center" data-original-title="Back To Top" style="display: block;">
                    <i class="fa fa-angle-double-up transition fadeInUp animated"></i> </a>
                <div class="footer-bottom-border"></div>
            </div>
            <!-- // Back To Top -->
        </div>
    </footer>
    <!-- footer-end -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>
