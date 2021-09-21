<div class="header" id="header">
    <div class="top-bar">
        <div class="container closed" id="top-bar">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="socail-links">
                        <ul>
                            <li> <a href="{{ appSettings('facebook_url') }}"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="{{ appSettings('twitter_url') }}"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="{{ appSettings('youtube_url') }}"> <i class="fa fa-youtube"></i> </a></li>
                            <li><a href="{{ appSettings('linkedin_url') }}"> <i class="fa fa-linkedin"></i> </a></li>
                            <li><a href="{{ appSettings('instagram_url') }}"> <i class="fa fa-instagram"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="right-top  justify-content-end">
                        <li><a href="#"><i class="fa fa-clock-o"></i>Sun - Fri : 09:00 - 18:30</a></li>
                        <li><a href="http://www.tel.com"><i class="fa fa-phone"></i> {{ appSettings('mobile') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="topbar-toggler" onclick="toggleHeader()">
            <span class="fa fa-chevron-down"></span>
        </div>
    </div>


    <div class="main-menu">
        <div class="container-fluid p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-light font-poppins" style="letter-spacing: 0.025rem;">
                <div class="container align-items-center">
                    <a class="navbar-brand mx-0" href="{{ url('/') }}">
                        <img class="mx-0" src="{{ siteLogoUrl() }}" alt="{{ siteName() }}" style="max-height: 60px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{ getPageUrlBySlug(appSettings('about_us_page_url')) }}" id="navbarDropdown" data-hover="dropdown">
                                    About Us

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item mb-2" href="{{route('about.about-FH')}}">Fred Hellows</a></li>

                                    <li><a class="dropdown-item mb-2" href="{{route('about.intro')}}">ED Message/
                                            Introduction</a></li>
                                    <li><a class="dropdown-item mb-2" href="{{route('about.team')}}">Our Team</a></li>

                                    <li><a class="dropdown-item mb-2" href="{{route('about.visionmisson')}}">Mission & Vision</a>
                                    </li>

                                    <li><a class="dropdown-item mb-2" href="{{route('about.qa')}}">Quality
                                            Assurance</a></li>
                                    <li><a class="dropdown-item mb-2" href="{{route('about.certificate')}}">Certification</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{ route('categories.index') }}" id="navbarDropdown" role="button" data-hover="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($categories as $category)
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown mb-2" href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                        @if(count($category->products))
                                        <ul class="dropdown-menu">
                                            @foreach ($category->products as $product)
                                            <li><a href="{{ route('products.show', $product) }}" class="dropdown-item mb-2">{{ $product->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Publication
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">News</a></li>
                                    <li><a class="dropdown-item" href="#">Events</a></li>
                                    <li><a class="dropdown-item" href="#">Articles</a></li>
                                    <li><a class="dropdown-item" href="#">Downloads</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('contact-us.index') }}">Contact Us</a>
                            </li>

                        </ul>
                        <form class="d-flex ms-4">
                            <div class="rounded-pill search-btn ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button id="button-addon2" type="submit" class="btn btn-link "><i class="fa fa-search"></i></button>
                                    </div>
                                    {{-- <input type="search" placeholder="search" aria-describedby="button-addon2" class="form-control border-0 "> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
