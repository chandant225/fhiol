<x-app-layout>
    <x-slot name="siteTitle">
        Posts | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Latest news and ideas from our team
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('posts') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container py-4 pb-5">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-sm-6 col-md-4">
                <x-frontend.post.post-card :post="$post" />
            </div>
            @endforeach
            @if ($posts->hasPages())
            {{ $posts->links() }}
            @endif
        </div>
    </div>
</x-app-layout>
