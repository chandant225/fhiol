<style>
    .footer {
        color: #424242;
        font-size: 14px;
        background-color: #fcfcfc;
        -webkit-box-shadow: 2px 6px 15px 10px rgba(237, 237, 237, 1);
        -moz-box-shadow: 2px 6px 15px 10px rgba(237, 237, 237, 1);
        box-shadow: 2px 6px 15px 10px rgba(237, 237, 237, 1);
    }

    .footer-action-wrapper {
        display: flex;
    }

    .footer-action-button {
        color: #58595e;
        text-align: center;
    }

    .footer-action-button:hover {
        text-decoration: none;
        color: var(--theme-accent-color)
    }

    .footer-action-button .icon {
        padding: 10px 8px;
        border: 2px solid #ccc;
        border-radius: 4px;
        margin-bottom: 5px;
        text-align: center;
    }

    .footer-action-button:hover .icon {
        border-color: var(--theme-accent-color);
    }

    .footer-action-button .icon svg {
        width: 1.4rem;
        height: 1.4rem;
    }

    .footer-action-button .label {
        font-size: 14px;
        font-weight: 500;
    }

    .footer-links {
        list-style-type: none;
        padding-left: none;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: inherit;
    }

    .footer-links a:hover {
        text-decoration: none;
        color: var(--theme-accent-color);
    }

</style>

<footer class="footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img src="{{ siteLogoUrl() }}" alt="{{ siteName() }}" style="max-height: 70px;">
                </div>
                <div class="my-3"></div>
                <div class="footer-action-wrapper">
                    <a href="tel:{{ appSettings('mobile') }}" class="footer-action-button mr-3">
                        <div class="icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div class="label">Call Us</div>
                    </a>
                    <a href="mailto:{{ appSettings('email') }}" class="footer-action-button mr-3">
                        <div class="icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="label">Email Us</div>
                    </a>
                    <a href="{{ route('stores.index') }}" class="footer-action-button">
                        <div class="icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="label">Find Us</div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <ul class="footer-links">
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('posts.index') }}">Blogs</a></li>
                    <li><a href="{{ route('catalogues.index') }}">Catalogues</a></li>
                    {{-- <li><a href="{{ route('stores.index') }}">Find a Store</a></li> --}}
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="footer-links">
                    <li><a href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">About Us</a></li>
                    <li><a href="{{ getPageUrlBySlug(appSettings('privacy_policy_page_url')) }}">Privacy Policy</a></li>
                    <li><a href="{{ getPageUrlBySlug(appSettings('terms_and_conditions_page_url')) }}">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div>Stay connected with us</div>
                <style>
                    .subscribe-form {
                        display: flex;
                        align-self: center;
                    }

                    .subscribe-form input {
                        -webkit-box-flex: 1;
                        flex-grow: 1;
                        padding: .9em;
                        background: hsla(0, 0%, 46%, .1);
                        border: none;
                        margin: 0;
                        -webkit-box-shadow: none;
                        box-shadow: none;
                    }

                    .subscribe-form input:focus {
                        outline-color: var(--theme-accent-color);
                    }

                    .subscribe-form button {
                        border: none;
                        -ms-flex-positive: 0;
                        -webkit-box-flex: 0;
                        flex-grow: 0;
                        margin-left: -4px;
                        margin-top: -1px;
                        padding-left: 10px;
                        padding-right: 10px;

                        background: #e30613;
                        color: #fff;
                        /* border-bottom: 4px solid #80030b; */
                        border-top-right-radius: 3px;
                        border-bottom-right-radius: 3px;
                    }

                    .subscribe-form button:hover {
                        background: #c10b16;
                    }

                </style>
                <livewire:frontend.subscription-form />

                <div class="mt-4">Follow us</div>
                <style>
                    .footer-social-links a {
                        display: inline-flex;
                        color: var(--theme-color);
                        font-size: 18px;
                        width: 35px;
                        height: 35px;
                        border: 2px solid var(--theme-color);
                        border-radius: 50%;
                        justify-content: center;
                        margin-right: 10px;
                    }
                    .footer-social-links a:hover {
                        background-color: var(--theme-color);
                        color: #fff;
                    }

                    .footer-social-links a span {
                        align-self: center;
                    }

                </style>
                <div class="footer-social-links mt-3">
                    <a href="{{ appSettings('facebook_url') }}">
                        <span><i class="fa fa-facebook"></i></span>
                    </a>
                    <a href="{{ appSettings('twitter_url') }}">
                        <span><i class="fa fa-twitter"></i></span>
                    </a>
                    <a href="{{ appSettings('youtube_url') }}">
                        <span><i class="fa fa-youtube"></i></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-white">
        <div class="container text-center py-4">
            <div class="d-flex justify-content-center">
                <div class="align-self-center">Find the entire Better product range at:</div>
                <a class="align-self-center d-flex  mx-2" href="">
                    <img src="{{ asset('assets/images/daraz-logo.jpg') }}" alt="Daraz" style="max-height: 30px;">
                </a>
                <a class="align-self-center d-flex  mx-2" href="">
                    <img src="{{ asset('assets/images/sastodeal-logo.jpg') }}" alt="Daraz" style="max-height: 30px;">
                </a>
            </div>
        </div>
    </div>
</footer>




<section class="felona-footer-area d-none">
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
