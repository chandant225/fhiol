<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Better</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('starter.css') }}" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        :root {
            --theme-color: #e60d2e;
            --dark-gray: #313445;
            --prooduct-image-aspect-ratio: 4/4;
        }

        .text-theme-color {
            color: var(--theme-color);
        }

        .bg-theme-color {
            background-color: var(--theme-color);
        }

        .text-dark-gray {
            color: var(--dark-gray);
        }

        @media screen AND (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1200px !important;
            }
        }

    </style>

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
                            </a>
                        </li>
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
                <a class="navbar-brand logo" href="{{ url('/') }}"><img style="height: 64px;" src="{{ asset('theme') }}/images/logo.png"></a>
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

    @yield('content')

    @include('frontend.layouts.partials.footer')

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
