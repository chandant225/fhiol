<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Better</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('starter.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div class="sp-top-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="contact_info">
                        <li>
                            <a href="mailto:info@website.com"> <i class="fa fa-envelope-o" aria-hidden="true"></i>info@website.com</a>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i> Call support free: 123 456 789

                            </a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <header>
        <nav class="navbar  navbar-expand-lg navbar-light top-navbar menu_top">
            <div class="container">
                <a class="navbar-brand logo" href="#"><img style="height: 64px;" src="{{ asset('theme') }}/images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav sub-menu">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>

    </header>
    <section class="banner">
        <div class="container">
            <div class="banner_img">
                <img src="{{ asset('theme') }}/images/4.jpg">

            </div>
            <div class="banner_title">
                KITCHEN APPLIANCES

            </div>

        </div>
    </section>
    <section class="product_wrap">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> Mixer and Grinder </h4>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="prd_item" src="{{ asset('theme') }}/images/product-6_grande.jpg">
                            </div>
                            <!--  -->
                            <div class="col-md-8 product_right_tag  ">
                                <h3>800-Watt Juicer</h3>
                                <div class="grid-link__meta">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl....</p>
                                    <div class="product_price">
                                        <div class="grid-link__org_price">
                                            <span class="money" data-currency-usd="$320.00">$320.00</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end of product -->
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('theme') }}/images/pdt4.jpg">
                            </div>
                            <!--  -->
                            <div class="col-md-8 product_right_tag  ">
                                <h3>800-Watt Juicer</h3>
                                <div class="grid-link__meta">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl....</p>
                                    <div class="product_price">
                                        <div class="grid-link__org_price">
                                            <span class="money" data-currency-usd="$320.00">$320.00</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end of product -->
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
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('theme') }}/images/product_1.png">
                            </div>
                            <!--  -->
                            <div class="col-md-8 product_right_tag  ">
                                <h3>800-Watt Juicer</h3>
                                <div class="grid-link__meta">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl....</p>
                                    <div class="product_price">
                                        <div class="grid-link__org_price">
                                            <span class="money" data-currency-usd="$320.00">$320.00</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end of product -->
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('theme') }}/images/product-6_grande.jpg">
                            </div>
                            <!--  -->
                            <div class="col-md-8 product_right_tag  ">
                                <h3>800-Watt Juicer</h3>
                                <div class="grid-link__meta">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl....</p>
                                    <div class="product_price">
                                        <div class="grid-link__org_price">
                                            <span class="money" data-currency-usd="$320.00">$320.00</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end of product -->
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
    <section class="new_product">
        <div class="container">
            <div class="border-title">
                <h4 class="section-header__title"> Mixer and Grinder</h4>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="item-box">
                        <div class="new_item">
                            <img src="{{ asset('theme') }}/images/coffe_maker.jpg">
                        </div>
                        <div class="category_text">
                            <ul>
                                <li>6 Variable Browning Settings</li>
                                <li> Auto Pop-up and Auto Shut Off </li>
                                <li> Mid-Cycle Cancel Function </li>
                                <li> Cool Touch Body & Crump Tray </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- col-md-3 -->
                <div class="col-md-4">
                    <div class="item-box">
                        <div class="new_item">
                            <img src="{{ asset('theme') }}/images/coffe_maker2.jpg">
                        </div>
                        <div class="category_text">
                            <ul>
                                <li>6 Variable Browning Settings</li>
                                <li> Auto Pop-up and Auto Shut Off </li>
                                <li> Mid-Cycle Cancel Function </li>
                                <li> Cool Touch Body & Crump Tray </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- col-md-3 -->
                <div class="col-md-4 ">
                    <div class="item-box">
                        <div class="new_item">
                            <img src="{{ asset('theme') }}/images/coffe_maker2.jpg">
                        </div>
                        <div class="category_text">
                            <ul>
                                <li>6 Variable Browning Settings</li>
                                <li> Auto Pop-up and Auto Shut Off </li>
                                <li> Mid-Cycle Cancel Function </li>
                                <li> Cool Touch Body & Crump Tray </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- col-md-3 -->
                <div class="col-md-4 ">
                    <div class="item-box">
                        <div class="new_item">
                            <img src="{{ asset('theme') }}/images/coffe_maker2.jpg">
                        </div>
                        <div class="category_text">
                            <ul>
                                <li>6 Variable Browning Settings</li>
                                <li> Auto Pop-up and Auto Shut Off </li>
                                <li> Mid-Cycle Cancel Function </li>
                                <li> Cool Touch Body & Crump Tray </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- col-md-3 -->
                <div class="col-md-4 ">
                    <div class="item-box">
                        <div class="new_item">
                            <img src="{{ asset('theme') }}/images/coffe_maker2.jpg">
                        </div>
                        <div class="category_text">
                            <ul>
                                <li>6 Variable Browning Settings</li>
                                <li> Auto Pop-up and Auto Shut Off </li>
                                <li> Mid-Cycle Cancel Function </li>
                                <li> Cool Touch Body & Crump Tray </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- col-md-3 -->
                <div class="col-md-4">
                    <div class="item-box">
                        <div class="new_item">
                            <img src="{{ asset('theme') }}/images/coffe_maker2.jpg">
                        </div>
                        <div class="category_text">
                            <ul>
                                <li>6 Variable Browning Settings</li>
                                <li> Auto Pop-up and Auto Shut Off </li>
                                <li> Mid-Cycle Cancel Function </li>
                                <li> Cool Touch Body & Crump Tray </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- col-md-3 -->
            </div>
        </div>
    </section>
    <section class="felona-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-block">
                            <h4>Contact</h4>
                            <div class="address">
                                <p> No: Add 1, <br>Address-2, MD, country</p>
                                <p class="contact_num"> <i class="fa fa-phone"></i>+977 12345678</p>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-item">
                            <h4>Contact</h4>
                            <ul>
                                <ul class="site-footer__links">

                                    <li><a href="/search">Search</a></li>

                                    <li><a href="/pages/faqs">Help</a></li>

                                    <li><a href="/pages/shipping-details">Information</a></li>

                                    <li><a href="/pages/contact-us">Privacy Policy</a></li>

                                    <li><a href="/pages/shipping-details">Shipping Delails</a></li>

                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-item">
                            <h4>Contact</h4>
                            <ul>
                                <ul class="site-footer__links">

                                    <li><a href="/search">Search</a></li>

                                    <li><a href="/pages/faqs">Help</a></li>

                                    <li><a href="/pages/shipping-details">Information</a></li>

                                    <li><a href="/pages/contact-us">Privacy Policy</a></li>

                                    <li><a href="/pages/shipping-details">Shipping Delails</a></li>

                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-item">
                            <h4>Contact</h4>
                            <ul>
                                <ul class="site-footer__links">

                                    <li><a href="/search">Search</a></li>

                                    <li><a href="/pages/faqs">Help</a></li>

                                    <li><a href="/pages/shipping-details">Information</a></li>

                                    <li><a href="/pages/contact-us">Privacy Policy</a></li>

                                    <li><a href="/pages/shipping-details">Shipping Delails</a></li>

                                </ul>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-left">
                            <p>Copyright © 2021. All rights reserved.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="js/bootstrap.bundle.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>

    <script>
        $('#myCarousel').carousel({
            interval: false
        });
        $('#carousel-thumbs').carousel({
            interval: false
        });

        // handles the carousel thumbnails
        // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr('id');
            var id = parseInt(id_selector.substr(id_selector.lastIndexOf('-') + 1));
            $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
            $('#carousel-thumbs .row div:nth-child(4)').each(function() {
                var rowBoundary = $(this);
                $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
            });
            $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
                var boundary = $(this);
                $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
            });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
            $('#carousel-thumbs [class^=carousel-control-]').remove();
            $('.machine-carousel-container #carousel-thumbs').css('padding', '0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
            var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-' + id + ']').addClass('selected');
        });
        // when user swipes, go next or previous
        $('#myCarousel').swipe({
            fallbackToMouseEvents: true
            , swipeLeft: function(e) {
                $('#myCarousel').carousel('next');
            }
            , swipeRight: function(e) {
                $('#myCarousel').carousel('prev');
            }
            , allowPageScroll: 'vertical'
            , preventDefaultEvents: false
            , threshold: 75
        });
        /*
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
        */

        $('#myCarousel .carousel-item img').on('click', function(e) {
            var src = $(e.target).attr('data-remote');
            if (src) $(this).ekkoLightbox();
        });

    </script>
</body>

</html>
