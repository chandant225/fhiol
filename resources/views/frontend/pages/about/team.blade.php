<x-app-layout>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ol>
                <h2>Our Team</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <!-- Team Section -->
                <section id="team" class="team section-bg">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach (\App\OurTeam::positioned()->get() as $ourTeam)
                            <div class="col-md-3 col-sm-6">
                                <div class="member align-items-center">
                                    <div class="row ">
                                        <div class="pic col-md-3"><img src="https://www.webfulcreations.com/themes/eyecare/wp-content/uploads/sites/8/2017/01/doctor1-1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="member-info ">
                                            <h4 class="mt-3">{{ $ourTeam->name }}</h4>
                                            <span>{{ $ourTeam->designation }}</span>

                                            <div class="social">
                                                <a href="{{ $ourTeam->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                                                <a href="{{ $ourTeam->twitter_link }}"><i class="fab fa-twitter"></i></a>
                                                <a href="{{ $ourTeam->facebook_link }}"><i class="fab fa-facebook"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section><!-- End Team Section -->
            </div>
        </section>
    </main><!-- End #main -->
</x-app-layout>
