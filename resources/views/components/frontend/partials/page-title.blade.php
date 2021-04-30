<div class="container-fluid bg-light">
    <style>
        @media only screen and (max-width: 600px) {
            .page-title {
                font-size: 1.5rem;/
            }
        }

    </style>
    <div class="container py-2 py-sm-4">
        @isset($title)
        <h1 class="page-title text-dark-gray mb-0 mb-sm-2">{{ $title }}</h1>
        @endisset

        @isset($breadcrumbs)
        <div>
            {{ $breadcrumbs }}
        </div>
        @endisset
    </div>
</div>
