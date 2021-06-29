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
                    <li><a href="{{ appSettings('youtube_url') }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="{{ appSettings('linkedin_url') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="{{ appSettings('instagram_url') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header style="border-bottom: 2px dotted #e5e5e5;">
    <nav class="navbar  navbar-expand-lg navbar-light top-navbar menu_top">
        <div class="container" x-data="{ show: false }">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img style="height: 64px;" src="{{ siteLogoUrl() }}" alt="{{ siteName() }}">
            </a>
            <button class="navbar-toggler" type="button" @click="show = !show">
                <span class="navbar-toggler-icon"></span>
            </button>
            @include('frontend.layouts.partials.mobile-menu')
            <div id="navbar" class="collapse navbar-collapse justify-content-end">
                <div id="navbar-overlay"></div>
                <ul class="navbar-nav sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('home') }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('products.*') }}" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('page/' . appSettings('about_us_page_url'))) active @endif" href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('contact-us.*') }}" href="{{ route('contact-us.index') }}">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <div style="height: 2px; background-color: #e5e5e5;"></div> --}}
</header>
@push('scripts')
<style>
    #navbar #navbar-overlay {
        position: fixed;
        background-color: var(--theme-color);
        z-index: -1;
        transition: .3s ease left, width, opacity;
        opacity: 0;
        border-radius: 2.5rem;
        top: 50px;
    }

    #navbar #navbar-overlay.active {
        opacity: 1;
    }

</style>
<script>
    const navbarOverlay = document.getElementById('navbar-overlay');
    const navList = document.querySelectorAll('#navbar .navbar-nav .nav-item');

    navList.forEach(navItem => {
        navItem.addEventListener('mouseover', () => {
            navbarOverlay.classList.add('active');
            let position = navItem.getBoundingClientRect();
            navbarOverlay.style.left = position.x + 'px';
            navbarOverlay.style.top = position.top + 'px';
            navbarOverlay.style.width = position.width + 'px';
            navbarOverlay.style.height = position.height + 'px';
        });

        navItem.addEventListener('mouseout', () => {
            navbarOverlay.classList.remove('active');
        });
    });

</script>
@endpush
