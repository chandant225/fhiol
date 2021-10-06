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
                        <ul class="footer-call">
                            <li>
                                <i class="material-icons me-2">add_location</i>
                                <span class="fontresize ">
                                    {{ appSettings('address') }}
                                </span>
                            </li>

                            <li>
                                <i class="material-icons me-2">phone</i>{{ appSettings('mobile') }} <br>
                            </li>

                            <li>
                                <i class="material-icons me-2">event_available</i> {{ appSettings('email') }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 marbot30-md-xs ">
                    <h4 class="footer-title"> quick links </h4>
                    <div class="clearfix">
                        <ul class="list-type1">
                            <li><a href="{{route('distribution')}}">Distribution</a></li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/publication">Published articles</a></li>
                            <li><a href="/new-and-events">News and events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">

                    <div id="subScribe">

                        <div class="wrapper">
                            <div class="top">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="bottom">
                                <div class="info">
                                    Subscribe to our Newsletter and <br>Get the latest updates
                                </div>

                                <livewire:frontend.subscription-form />

                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-seperator"></div>
                <div class="row align-items-center col-12">
                    <div class="col-md-6 ">
                        <div class="footer-bottom-strip">
                            <div class="copyright marbot30-md-xs">
                                Copyright © 2021 <span class="bold">FHIOL</span>. All Rights Reserved. Designed By <a href="https://outofboxdesign.com">Outofbox Design</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="clearfix">
                            <ul class="footer-strip-menu ">
                                {{-- <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}">About Us</a></li>
                                <li><a href="{{ route('products.index') }}">Products </a></li>
                                <li><a href="#">Publication</a></li> --}}
                                <li><a href="{{ getPageUrlBySlug(appSettings('privacy_policy_page_url')) }}">Privacy Policy</a></li>
                                <li><a href="{{ getPageUrlBySlug(appSettings('terms_and_conditions_page_url')) }}">Terms &amp; Conditions</a></li>
                                <li><a href="{{ route('contact-us.index') }}">Contact Us</a></li>
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
