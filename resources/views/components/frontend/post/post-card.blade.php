    <div class="post-card rounded-lg shadow card mb-3 border-0 p-3 mb-5">
        <a class="image-wrapper" href="{{ route('posts.show', $post) }}">
            <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
        </a>
        <div class="card-body px-md-4 px-lg-5">
            <h5 class="card-title post__title"><a class=" line-clamp-2" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h5>
            <p class="card-text"><small class="text-muted">Published at {{ $post->created_at->format('d, M Y') }}</small></p>
            <p class="card-text line-clamp-3">{{ $post->seo_description }}</p>
        </div>
    </div>
