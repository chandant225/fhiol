<x-app-layout>
    <x-slot name="siteTitle">
        {{ $requestedCategory->name ?? 'Publications' }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ $requestedCategory->name ?? 'Publications' }}
        </x-slot>
        <x-slot name="breadcrumbs">
            <div class="flex justify-center">
                {{ Breadcrumbs::render('posts') }}
            </div>
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto py-4">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-6">
                <x-frontend.post.post-card :post="$post" />
            </div>
            @endforeach

            @if ($posts->hasPages())
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
            @endif

        </div>
    </div>
</x-app-layout>
