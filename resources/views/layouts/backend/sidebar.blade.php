<aside class="main-sidebar sidebar-light-indigo elevation-1">
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
                <img src="{{ auth()->user()->avatar() }}" class="img-circle elevation-1" alt="{{ auth()->user()->name }}">
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
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.categories.index') }}" class="nav-link {{ setActive('backend.categories.*') }}">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('backend.products.index')) menu-tree @endif">
                    <a href="{{ route('backend.products.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-box"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('backend.posts*')) menu-open @endif"">
                    <a href="#" class="nav-link @if(request()->routeIs('backend.posts*')) active @endif">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Posts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.posts.index') }}" class="nav-link {{ setActive('backend.posts.index') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.posts.create') }}" class="nav-link {{ setActive('backend.posts.create') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tags</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.contact-us.index') }}" class="nav-link {{ setActive('backend.contact-us.*') }}">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                            Contact Messages
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.stores.index') }}" class="nav-link {{ setActive('backend.stores.*') }}">
                        <i class="nav-icon fa fa-store"></i>
                        <p>
                            Stores
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('backend.contact-us.index') }}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('backend.subscribers.index') }}" class="nav-link {{ setActive('backend.subscribers.*') }}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Subscribers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.logs') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>
                            System Logs
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('backend.settings.*')) menu-open @endif">
                    <a href="#" class="nav-link {{ setActive('backend.settings.*') }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.settings.general.index') }}" class="nav-link {{ setActive('backend.settings.general.index') }}">
                                <i class="far fa-circle nav-icon"></i>
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
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-header">CMS</li> --}}
                <li class="nav-item @if(request()->routeIs('backend.pages.*')) menu-open @endif">
                    <a href="#" class="nav-link {{ setActive('backend.pages.*') }}">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.pages.index') }}" class="nav-link {{ setActive('backend.pages.index') }}">
                                <i class="far fa-file-image nav-icon"></i>
                                <p>List All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.pages.create-or-edit') }}" class="nav-link {{ setActive('backend.pages.create-or-edit') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Page</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @if(request()->routeIs('backend.image-sliders.*')) menu-open @endif">
                    <a href="#" class="nav-link {{ setActive('backend.image-sliders.*') }}">
                        <i class="nav-icon fa fa-file-image"></i>
                        <p>
                            Image Sliders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.image-sliders.index') }}" class="nav-link {{ setActive('backend.image-sliders.index') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.image-sliders.create') }}" class="nav-link {{ setActive('backend.image-sliders.create') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
