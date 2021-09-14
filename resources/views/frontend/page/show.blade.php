<x-app-layout>
    <x-slot name="siteTitle">
        {{ $page->title }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        @if($page->show_title)
        <x-slot name="title">
            {{ $page->title }}
        </x-slot>
        @endif
        @if($page->show_breadcrumbs)
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('page', $page->title ?? null) }}
        </x-slot>
        @endif
    </x-frontend.partials.page-title>

    @if($page->hasFeaturedImage())
    <img class="w-100 mx-auto" src="{{ $page->featured_image_url }}" alt="{{ $page->title }}">
    @endif
    <div class="container-fluid py-5">
        <div>
            {!! $page->content !!}
        </div>
    </div>
</x-app-layout>
