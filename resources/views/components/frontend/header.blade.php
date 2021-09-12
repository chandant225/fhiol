<div class="header" id="header">
    <div class="top-bar">
        <div class="container closed" id="top-bar">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="socail-links">
                        <ul>
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="right-top  justify-content-end">
                        <li><a href="#"><i class="fa fa-clock-o"></i>Sun - Fri : 09:00 - 18:30</a></li>
                        <li><a href="http://www.tel.com"><i class="fa fa-phone"></i> +977 9802347282</a></li>
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
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid align-items-center">
                    <a class="navbar-brand" href="#"><img src="/theme/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{ route('categories.index') }}" id="navbarDropdown" role="button" data-hover="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($categories as $category)
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown mb-2" href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
                                        <ul class="dropdown-menu">
                                            @foreach ($category->products as $product)
                                            <li><a href="{{ route('product.show') }}" class="dropdown-item mb-2">{{ $product->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Publication
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                            </li>

                        </ul>
                        <form class="d-flex ms-4">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success " type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
