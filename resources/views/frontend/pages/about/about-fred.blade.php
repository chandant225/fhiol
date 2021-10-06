<x-app-layout>
    <section class="about-hollows">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ol>
                <h2>Fred Hollows</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <div class="container">
            <div class="title-left">
                <h4>Our story</h4>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <p>
                        Professor Fredrick Hollow AC,MB ChB (NZ), DO (LOND), FRCS, FRACO (9 April 1929-10 February
                        1993),a highly honored and influential eye surgeon in Australia,well known for his humanitarian
                        work in developing eye care facilities around the world,especially in developing
                        countries,envisioned the concept of a state of the art manufacturing facility of intraocular
                        lenses in a developing country.Having visited Nepal as a consultant to the World Health
                        Organization (WHO) in 1985,he was aware of the eye care needs of Nepal.
                        <br>
                        Dr.Sanduk Ruit M.D. FRACO,a highly skilled and respected surgeon in Nepal is the first Nepali
                        doctor to perform cataract surgery with intraocular lens implants.He has also pioneered the use
                        of microsurgical extra-capsular cataract extraction with posterior chamber lens implants.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/theme/img/banner/banner01.jpg" alt="about img">
                </div>
            </div>
        </div>

        <div class="MiVi">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Our Mission</h4>
                        <ul>
                            <li><i class="fas fa-check me-2"></i><span>To provide customized solutions to the students aspiring to study in Canada.</span></li>
                            <li>
                                <i class="fas fa-check me-2"></i>
                                <span>Strive for the organic growth of our organization through integrity, honesty, andexcellence.</span>
                            </li>
                            <li>
                                <i class="fas fa-check me-2"></i>
                                <span>To build a strong and credible relationship with the partner institutions by recognizing shared values & goals.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Our Vision</h4>
                        <ul>
                            <li>
                                <i class="fas fa-check me-2"></i>
                                <span>To provide customized solutions to the students aspiring to study in Canada.</span>
                            </li>
                            <li>
                                <i class="fas fa-check me-2"></i>
                                <span>Strive for the organic growth of our organization through integrity, honesty, and excellence.</span>
                            </li>
                            <li>
                                <i class="fas fa-check me-2"></i>
                                <span>To build a strong and credible relationship with the partner institutions by recognizing shared values & goals.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-pad-lg video-sec has-parallax overlay" style="background-image: url(&quot;https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80&quot;);">
            <div class="d-flex justify-content-center">
                <a class="btn round video-pop" href="https://www.youtube.com/watch?v=iaj8ktgL3BY"><i class="fa fa-play" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- About Hollows-end -->
    @push('scripts')
    <style>
        .section-pad-lg {
            margin-top: 80px;
            padding-top: 134.4px;
            padding-bottom: 134.4px;
        }

        .section-pad-lg a {
            background: transparent;
            color: #fff;
            border-color: #fff;
            font-size: 33px;
            outline-style: none;
            width: 85px;
            height: 85px;
            z-index: 1;
            padding: 20px 30px;
            border-radius: 50%;
        }

        .section-pad-lg a:hover i {
            color: #dd6310;

        }

        .section-pad-lg a:hover {
            border-color: #dd6310;

        }

    </style>

    <script>
        $(function() {
            $('.video-pop').magnificPopup({
                disableOn: 700
                , type: 'iframe'
                , mainClass: 'mfp-fade'
                , removalDelay: 160
                , preloader: false
                , fixedContentPos: false
            });
        });

    </script>
    @endpush

</x-app-layout>
