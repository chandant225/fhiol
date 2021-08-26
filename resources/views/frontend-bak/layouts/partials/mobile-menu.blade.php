<style>
    #mobile-menu,
    #mobile-menu a {
        color: var(--dark-gray);
        color: #e0e0e0;
    }

    #mobile-menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 100;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.95);
    }

    #mobile-menu .close-btn {
        font-size: 1.4rem;
        color: inherit;
    }

    #mobile-menu .mobile-menu-content {
        position: relative;
        /* top: 15%; */
        width: 100%;
        text-align: center;
        margin-top: 30px;
    }

    .mobile-menu-content .menu-link {
        padding: 8px;
        text-decoration: none;
        font-size: 32px;
        display: block;
        transform: 0.3s;
        font-weight: 600;
        /* font-family: 'Source Sans Pro', sans-serif; */
    }

</style>
<aside  x-show="show"  id="mobile-menu" class="d-sm-none py-2 px-3 shadow-lg animate__animated animate__faster" x-transition:enter="animate__slideInLeft" x-transition:leave="animate__slideOutLeft">
    <div class="text-right py-2 px-4">
        <button role="button" class="close-btn btn btn-link" @click="show = false">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>
    <div class="mobile-menu-content overflow-auto text-center border-success">
        <a class="menu-link" href="{{ url('/') }}">Home</a>
        <a class="menu-link" href="{{ route('products.index') }}">Products</a>
        {{-- <a class="menu-link" href="{{ route('stores.index') }}">Find a Store</a> --}}
        <a class="menu-link" href={{ url(appSettings('about_us_page_url', '/')) }}"">About Us</a>
        <a class="menu-link" href="{{ route('contact-us.index') }}">Contact Us</a>
        <div class="text-center mt-4">
            <div>
                <a href="tel:{{ appSettings('mobile') }}"> <i class="fa fa-phone mr-1" aria-hidden="true"></i>{{ appSettings('mobile') }}</a>
            </div>
            <div>
                <a href="mailto:{{ appSettings('email') }}"> <i class="fa fa-envelope mr-2" aria-hidden="true"></i>{{ appSettings('email') }}</a>
            </div>
            <div class="">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="{{ appSettings('facebook_url') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ appSettings('twitter_url') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ appSettings('youtube_url') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</aside>
