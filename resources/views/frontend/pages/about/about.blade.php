<x-app-layout>
    <section class="about-hollows">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs" style="background:url('/theme/img/banner/fhiol-about-banner-cropped.jpg') no-repeat center center / cover, #DCEAEB">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About Fred</li>
                </ol>
                <h2>About Fred</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <div class="container">
            <div class="title-left">
                <h4>Our story</h4>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <p>Professor Fredrick Hollow AC,MB ChB (NZ), DO (LOND), FRCS, FRACO (9 April 1929-10 February 1993),a highly honored and influential eye surgeon in Australia,well known for his humanitarian work in developing eye care facilities around the world,especially in developing countries,envisioned the concept of a state of the art manufacturing facility of intraocular lenses in a developing country.Having visited Nepal as a consultant to the World Health Organization (WHO) in 1985,he was aware of the eye care needs of Nepal.</p>
                    <p>Dr.Sanduk Ruit M.D. FRACO,a highly skilled and respected surgeon in Nepal is the first Nepali doctor to perform cataract surgery with intraocular lens implants.He has also pioneered the use of microsurgical extra-capsular cataract extraction with posterior chamber lens implants.</p>
                    <p>Dr.Ruit had a special friendship with Prof. Fred and both shared the same outlook on life,medical philosophies and vision of a world where no one is needlessly blind. In the early 1990s prof. Fred and Dr.Ruit,joined together to overcome the obstacles faced by Nepal by building a state-of-the-art laboratory in kathmandu.</p>
                </div>
                <div class="col-md-6">
                    <img src="/theme/img/banner/fhiol-about.jpg" alt="about img">
                </div>
                <div class="col-md-12">
                    <p>Fred had decided to work towards raising money needed to build high tech intraocular lens manufacturing laboratories and the establishment of Eye care infrastructures with modern operating facilities.</p>
                    <p>The Fred Hollows Foundation was launched in Sydney, Australia on 3 September 1992, (just five months before Professor Fred Hollows passed away) as a not -for-profit, community based,non government development aid organization.Today the Fred Hollows Foundation has grown to become one of the pioneer institutions involved in blindness prevention of the world.</p>
                    <p>The Fred Hollows Intraocular Lens Laboratory Kathmandu was funded by Fred Hollows Foundation, who assigned engineers from Australia and New Zealand for design and construction.With the on going technical assistance over the years, the Kathmandu Laboratory is in its present status as a world class manufacturer of intraocular lenses.The FH IOL Lab-Kathmandu salutes the vision of the late professor Fred Hollows.</p>
                </div>
            </div>
        </div>

        <div class="section section-pad-lg video-sec has-parallax overlay" style="background-image: url(&quot;https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80&quot;);">
            <div class="d-flex justify-content-center">
                <a class="btn round video-pop" href="https://www.youtube.com/watch?v=vNoK_CdpmrU"><i class="fa fa-play" aria-hidden="true"></i></a>
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
