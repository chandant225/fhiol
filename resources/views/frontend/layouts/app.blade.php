<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        {{ $siteTitle ?? appSettings('site_name') }}
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('starter.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-clamp.css') }}">
    @livewireStyles
    @stack('styles')
    {{ $styles ?? '' }}

</head>

<body>
    <div class="topbar-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="contact_info mb-0">
                        <li>
                            <a href="mailto{{ appSettings('email') }}"> <i class="fa fa-envelope-o" aria-hidden="true"></i>{{ appSettings('email') }}</a>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i> Call support free: {{ appSettings('mobile') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="social mb-0">
                        <li><a href="{{ appSettings('facebook_url') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ appSettings('twitter_url') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{ appSettings('youtube_url') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header style="border-bottom: 2px dotted #e5e5e5;">
        <nav class="navbar  navbar-expand-lg navbar-light top-navbar menu_top">
            <div class="container">
                <a class="navbar-brand logo" href="{{ url('/') }}"><img style="height: 64px;" src="{{ asset('theme') }}/images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav sub-menu">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url(appSettings('about_us_page_url', '/')) }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us.index') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <div style="height: 2px; background-color: #e5e5e5;"></div> --}}
    </header>

    <x-frontend.partials.category-navbar />

    {{ $slot }}

    @include('frontend.layouts.partials.footer')
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="js/bootstrap.bundle.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('assets/js/frontend.js') }}"></script>
    @livewireScripts
    <x-livewire-alert::scripts />
    @stack('scripts')
</body>

</html>
