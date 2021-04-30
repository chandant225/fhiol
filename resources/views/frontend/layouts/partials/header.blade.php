<div class="topbar-wrapper d-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="contact_info mb-0">
                    <li>
                        <a href="mailto:{{ appSettings('email') }}"> <i class="fa fa-envelope-o" aria-hidden="true"></i>{{ appSettings('email') }}</a>
                    </li>
                    <li><a href="tel:{{ appSettings('mobile') }}">
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
        <div class="container" x-data="{ show: false }">
            <a class="navbar-brand logo" href="{{ url('/') }}"><img style="height: 64px;" src="{{ asset('theme') }}/images/logo.png"></a>
            <button class="navbar-toggler" type="button" @click="show = !show">
                <span class="navbar-toggler-icon"></span>
            </button>
                @include('frontend.layouts.partials.mobile-menu')
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav sub-menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url(appSettings('about_us_page_url', '/')) }}">About us</a>
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
