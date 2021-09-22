<div class="container-fluid" style="background-color: #3d4d6a; background:linear-gradient(rgba(40, 58, 90, 0.9), rgba(40, 58, 90, 0.9)), url(/theme/img/banner/banner03.jpg) fixed center center;">
    <style>
        @media only screen and (max-width: 600px) {
            .page-title {
                font-size: 1.5rem;/
            }
        }

    </style>
    <div class="container py-4 py-sm-5">
        @isset($breadcrumbs)
        <div>
            {{ $breadcrumbs }}
        </div>
        @endisset

        @isset($title)
        <h2 class="page-title text-white mb-0 mb-sm-2">{{ $title }}</h2>
        @endisset
    </div>
</div>
