<aside class="main-sidebar sidebar-light-indigo">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link text-center" target="_blank">
        {{-- <span class="brand-text font-weight-light">{{ siteName() }}</span> --}}
        <img src="{{ siteLogoUrl() }}" alt="" style="max-width: 100%; height: 2.5rem;" alt="{{ siteName() }}">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->avatar() }}" class="img-circle" alt="{{ auth()->user()->name }}">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('backend.dashboard') }}" class="nav-link {{ setActive('backend.dashboard') }}">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <span class="nav-icon svg-icon icon-baseline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                            </svg>
                        </span>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>

                {{-- Products --}}
                <li class="nav-item @if(request()->routeIs('backend.products.*') OR request()->routeIs('backend.categories.*')) menu-open @endif">
                    <a href=" #" class="nav-link @if(request()->routeIs('backend.products*') OR request()->routeIs('backend.categories.*')) active @endif">
                        {{-- <i class="nav-icon fa fa-book"></i> --}}
                        <span class="nav-icon svg-icon svg-baseline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                            </svg>
                        </span>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.products.index') }}" class="nav-link">
                                <span class="nav-icon svg-icon svg-baseline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                    </svg>
                                </span>
                                <p>
                                    All Products
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.products.create') }}" class="nav-link">
                                <span class="nav-icon svg-icon svg-baseline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </span>
                                <p>
                                    Add New
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.categories.index') }}" class="nav-link {{ setActive('backend.categories.*') }}">
                                {{-- <i class="nav-icon fa fa-list"></i> --}}
                                <span class="nav-icon svg-icon svg-baseline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                    </svg>
                                </span>
                                <p>
                                    Product Categories
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Posts --}}
                <li class="nav-item @if(request()->routeIs('backend.posts*')) menu-open @endif"">
                    <a href=" #" class="nav-link @if(request()->routeIs('backend.posts*')) active @endif">
                    {{-- <i class="nav-icon fa fa-book"></i> --}}
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </span>
                    <p>
                        Posts
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.posts.index') }}" class="nav-link {{ setActive('backend.posts.index') }}">
                                <i class="far fa-circle nav-icon text-warning"></i>
                                <p>All Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.posts.create') }}" class="nav-link {{ setActive('backend.posts.create') }}">
                                <i class="far fa-circle nav-icon text-info"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.post-categories.index') }}" class="nav-link {{ setActive('backend.post-categories.index') }}">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.product-inquiry.index') }}" class="nav-link {{ setActive('backend.product-inquiry.*') }}">
                        <span class="nav-icon svg-icon svg-baseline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </span>
                        <p>
                            Product Inquiries
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.contact-us.index') }}" class="nav-link {{ setActive('backend.contact-us.*') }}">
                        {{-- <i class="nav-icon far fa-comments"></i> --}}
                        <span class="nav-icon svg-icon svg-baseline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                        </span>
                        <p>
                            Contact Messages
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.distribution-inquiry.index') }}" class="nav-link {{ setActive('backend.distribution-inquiry.*') }}">
                        <span class="nav-icon svg-icon svg-baseline">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </span>
                        <p>
                            Distribution Inquiries
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ route('backend.catalogues.index') }}" class="nav-link {{ setActive('backend.catalogues.*') }}">
                <span class="nav-icon svg-icon svg-baseline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                    </svg>
                </span>
                <p>
                    Catalogues
                </p>
                </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a href="{{ route('backend.stores.index') }}" class="nav-link {{ setActive('backend.stores.*') }}">
                <span class="nav-icon svg-icon svg-baseline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                </span>
                <p>
                    Stores
                </p>
                </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('backend.contact-us.index') }}" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Users
                </p>
                </a>
                </li> --}}

                <li class="nav-item @if(request()->routeIs('backend.subscribers*')||request()->routeIs('backend.newsletter*')||request()->routeIs('backend.email*')) menu-open @endif">
                    <a href=" #" class="nav-link @if(request()->routeIs('backend.posts*')) active @endif">
                        <i class="nav-icon fas fa-envelope-square"></i>
                    <p>
                        Manage Newsletter
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.subscribers.index') }}" class="nav-link {{ setActive('backend.subscribers.*') }}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Subscribers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.newsletter.index') }}" class="nav-link {{ setActive('backend.newsletter.*') }}">
                                <i class="nav-icon fas fa-envelope-square"></i>
                                <p>
                                    Templates
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>




            {{-- <li class="nav-item">
                <a href="{{ route('backend.videos.index') }}" class="nav-link {{ setActive('backend.videos.*') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                        </svg>
                    </span>
                    <p>
                        Videos
                    </p>
                </a>
            </li> --}}

            <li class="nav-item">
                <a href="{{ route('backend.popups.index') }}" class="nav-link {{ setActive('backend.popups.*') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                            <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"/>
                          </svg>
                    </span>
                    <p>
                        Popup Banner
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.certification') }}" class="nav-link {{ setActive('backend.certification*') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <i class="far fa-file"></i>
                    </span>
                    <p>
                        Certifications
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('backend.downloads.index') }}" class="nav-link {{ setActive('backend.downloads.*') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z"/>
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                          </svg>
                    </span>
                    <p>
                        Downloads
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.gallery') }}" class="nav-link {{ setActive('backend.gallery*') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                        </svg>
                    </span>
                    <p>
                        Manage Gallery
                    </p>
                </a>
            </li>

            {{-- Image Sliders --}}
            <li class="nav-item @if(request()->routeIs('backend.image-sliders.*')) menu-open @endif">
                <a href="#" class="nav-link {{ setActive('backend.image-sliders.*') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                        </svg>
                    </span>
                    <p>
                        Image Sliders
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.image-sliders.index') }}" class="nav-link {{ setActive('backend.image-sliders.index') }}">
                            <i class="far fa-circle nav-icon text-warning"></i>
                            <p>List All</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.image-sliders.create') }}" class="nav-link {{ setActive('backend.image-sliders.create') }}">
                            <i class="far fa-circle nav-icon text-danger"></i>
                            <p>Add New</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- Testimonials --}}
            <li class="nav-item">
                <a href="{{ route('backend.testimonials.index') }}" class="nav-link {{ setActive('backend.testimonials.index') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                            <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
                        </svg>
                    </span>
                    <p>
                        Testimonials
                    </p>
                </a>
            </li>

            {{-- Our Team --}}
            <li class="nav-item">
                <a href="{{ route('backend.our-team.index') }}" class="nav-link {{ setActive('backend.our-team.index') }}">
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          </svg>
                    </span>
                    <p>
                        Our Team
                    </p>
                </a>
            </li>

            <li class="nav-header text-muted">Admin Tools</li>
            <li class="nav-item @if(request()->routeIs('backend.settings.*')) menu-open @endif">
                <a href="#" class="nav-link {{ setActive('backend.settings.*') }}">
                    {{-- <i class="nav-icon fas fa-cog"></i> --}}
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                    </span>
                    <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.settings.general.index') }}" class="nav-link {{ setActive('backend.settings.general.index') }}">
                            <i class="far fa-circle nav-icon text-danger"></i>
                            <p>General</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('backend.settings.page.index') }}" class="nav-link {{ setActive('backend.settings.page.index') }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>API & Keys</p>
                    </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('backend.settings.page.index') }}" class="nav-link {{ setActive('backend.settings.page.index') }}">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Page Settings</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.settings.homepage.index') }}" class="nav-link {{ setActive('backend.settings.homepage.index') }}">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Homepage Settings</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.settings.footer.index') }}" class="nav-link {{ setActive('backend.settings.footer.index') }}">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Footer Settings</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.settings.code-injector.index') }}" class="nav-link {{ setActive('backend.settings.code-injector.index') }}">
                    <i class="far fa-circle nav-icon text-primary"></i>
                    <p>Code Inejctor</p>
                </a>
            </li>
        </ul>
        </li>

        <li class="nav-item @if(request()->routeIs('backend.pages.*')) menu-open @endif">
            <a href="#" class="nav-link {{ setActive('backend.pages.*') }}">
                {{-- <i class="nav-icon fa fa-file"></i> --}}
                <span class="nav-icon svg-icon svg-baseline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    </svg>
                </span>
                <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('backend.pages.index') }}" class="nav-link {{ setActive('backend.pages.index') }}">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>List All</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.pages.create-or-edit') }}" class="nav-link {{ setActive('backend.pages.create-or-edit') }}">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Add Page</p>
                    </a>
                </li>
            </ul>
        </li>

            <li class="nav-item">
                <a href="{{ route('backend.logs') }}" class="nav-link" target="_blank">
                    {{-- <i class="nav-icon fas fa-exclamation-circle"></i> --}}
                    <span class="nav-icon svg-icon svg-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bug" viewBox="0 0 16 16">
                            <path d="M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z" />
                        </svg>
                    </span>
                    <p>
                        System Logs
                    </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<style>
    .nav-sidebar>.nav-item .nav-icon {
        font-size: 1rem;
    }

</style>
