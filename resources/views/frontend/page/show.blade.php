<x-app-layout>
    <x-slot name="siteTitle">
        {{ $page->title }} | {{ config('app.name') }}
    </x-slot>

    <x-frontend.partials.page-title>
        @if($page->show_title)
        <x-slot name="title">
            <h1 class="text-4xl font-semibold text-gray-800 leaing-8 tracking-wide">{{ $page->title }}</h1>
        </x-slot>
        @endif
        @if($page->show_breadcrumbs)
        <x-slot name="breadcrumbs">
            Home / Mixer & Grinder /Products
            {{-- @section('breadcrumbs', Breadcrumbs::render('page', $page->title ?? null)) --}}
        </x-slot>
        @endif
    </x-frontend.partials.page-title>

    @if($page->hasFeaturedImage())
    <img class="w-100 mx-auto" src="{{ $page->featured_image_url }}" alt="{{ $page->title }}">
    @endif
    <div class="container mx-auto">
        <div class="container py-5">
            <div>
                {!! $page->content !!}
            </div>
        </div>
    </div>
</x-app-layout>
