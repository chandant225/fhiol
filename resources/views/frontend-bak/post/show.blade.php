<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>

    <div class="container py-5 px-4">
        <div class="row">
            <div class="col-md-8">
                <div>
                    {{ Breadcrumbs::render('post', $post) }}
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl text-indigo-900 font-bold tracking-wide my-6">{{ $post->title }}</h1>
                <section class="d-flex align-items-center my-2">
                    <div class="d-flex align-items-center">
                        <span class="text-primary svg-icon svg-baseline mr-1">
                            <svg class="d-inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="ml-3 d-flex align-items-center">
                        <span class="text-primary svg-icon icon-baseline mr-1">
                            <svg class="d-inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </span>
                        <span>Admin</span>
                    </div>
                    @hasrole('admin')
                    <a class="ml-3 d-flex align-items-center hover:underline" href="{{ route('backend.posts.edit', $post) }}">
                        <span class="text-primary svg-icon icon-baseline mr-1">
                            <svg class="d-inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </span>
                        <span>Edit</span>
                    </a>
                    @endhasrole
                </section>

                <section class="my-3">
                    <img class="img-fluid w-100" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                </section>

                <article id="post-{{ $post->slug }}" class="lg:prose-lg xl:prose-xl prose-indigo w-screen sm:w-auto overflow-x-auto sm:overflow-visible">
                    {!! $post->content !!}
                </article>

                <div class="py-4 flex">
                    <div>
                        <div class="flex space-y-2 space-x-2 flex-wrap items-center">
                            @foreach ($post->tags as $tag)
                            @include('frontend.post.tag-label', ['label' => $tag->name, 'link' => '/' ])
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="flex-shrink-0 sm:pl-3">
                        Social Share
                    </div> --}}
                </div>

            </div>
            <div class="col-md-4">
                <div class="border rounded-lg p-4 sticky-top" style="top: 10px;">
                    <h5 class="h5-responsive font-weight-bold mb-4">{{ __('Recent Posts') }}</h5>
                    <div>
                        @foreach ($latestPosts as $post)
                        <div class="media">
                            <img class="mr-3 rounded-lg" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" style="width: 6rem; height: 4rem;">
                            <div class="media-body">
                                <h6 class="h6-responsive line-clamp-3 py-1">
                                    <a href="{{ route('posts.show', $post) }}" style="color: inherit;">{{ $post->title }}</a>
                                </h6>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if(isset($tags) && count($tags))
                    <div class="mt-5">
                        <h5 class="h5-responsive font-weight-bold mb-4">{{ __('Tags') }}</h5>
                        @foreach ($tags as $tag)
                        @include('frontend.post.tag-label', ['label' => $tag->name, 'link' => '/' ])
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
