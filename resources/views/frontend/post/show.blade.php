<x-app-layout>
    <x-slot name="siteTitle">{{ $siteTitle }}</x-slot>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div>
                    {{ Breadcrumbs::render('post', $post) }}
                </div>
                <img class="img-fluid my-3" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                <h1 class="h1-responsive text-black">{{ $post->title }}</h1>
                <section class="d-flex align-items-center text-dark my-2">
                    <div>
                        <span class="fa fa-clock"></span>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    @hasrole('admin')
                    <a class="ms-3" href="{{ route('backend.posts.edit', $post) }}">
                        <span class="fa fa-edit"></span>
                        <span>Edit</span>
                    </a>
                    @endhasrole
                </section>

                <article id="post-{{ $post->slug }}" class="text-justify" style="text-align: justify;">
                    {!! $post->content !!}
                </article>

                {{-- <div class="py-4 flex">
                    <div>
                        <div class="flex space-y-2 space-x-2 flex-wrap items-center">
                            @foreach ($post->tags as $tag)
                            <a class="bg-indigo-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-primary" href="{{ route('posts.index', ['tag' => $tag->name]) }}">
                                <span class="inline-block bg-primary w-3 h-3 rounded-full group-hover:bg-white"></span>
                                <span class="text-primary font-semibold text-sm group-hover:text-white">{{ ucfirst($tag->name) }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="col-md-5 col-lg-4">
                <div class="rounded shadow-sm p-4 position-sticky" style="top: 90px;">
                    <h3 class=" mb-4">{{ __('Recent Posts') }}</h3>
                    <div>
                        @foreach ($latestPosts as $post)
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <img class="rounded-lg img-fluid" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                            </div>
                            <div class="col-md-8">
                                <h6 class="">
                                    <a class="link-unstyled text-black" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                </h6>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- @if(isset($tags) && count($tags))
                    <div>
                        <h3 class="text-xl sm:text-2xl text-primary font-bold tracking-wide mb-4">{{ __('Tags') }}</h3>
                    @foreach ($tags as $tag)
                    <a class="bg-indigo-50 py-2 px-3 group inline-flex items-center space-x-2 rounded-full hover:bg-primary mr-2 mb-3" href="{{ route('posts.index', ['tag' => $tag->name]) }}">
                        <span class="inline-block bg-primary w-3 h-3 rounded-full group-hover:bg-white"></span>
                        <span class="text-primary font-semibold text-sm group-hover:text-white">{{ ucfirst($tag->name) }}</span>
                    </a>
                    @endforeach
                </div>
                @endif --}}
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
