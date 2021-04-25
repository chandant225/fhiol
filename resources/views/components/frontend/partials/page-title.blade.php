<div class="container-fluid bg-light">
    <div class="container py-4">
        @isset($title)
        <h1 class="text-dark-gray">{{ $title }}</h1>
        @endisset

        @isset($breadcrumbs)
        <div>
            {{ $breadcrumbs }}
        </div>
        @endisset
    </div>
</div>
