<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        {{ $siteTitle ?? config('app.name') }}
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('starter.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    @stack('styes')

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

    {{ $slot }}

    @include('frontend.layouts.partials.footer')

    @stack('scripts')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="js/bootstrap.bundle.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <script src="{{ asset('assets/js/frontend.js') }}"></script>

</body>

</html>
