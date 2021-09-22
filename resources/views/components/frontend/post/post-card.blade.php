<div class="post-card p-3 rounded-lg shadow">
    <div class="image-wrapper">
        <img class="rounded-lg" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
    </div>
    <div class="py-4 px-3">
        <div class="tag-label py-2 px-3">
            <span class="dot"></span>
            <span class="tag text-red-600">{{ $post->category->name }}</span>
        </div>
        <h1 class="post__title line-clamp-2 my-4">
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </h1>
        <div class="d-flex">
            <div>
                <span class="icon svg-icon svg-baseline mr-1">
                    <svg class="inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </span>
                <span>{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div class="ml-4">
                <span class="icon svg-icon svg-baseline mr-1">
                    <svg class="inline-flex" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </span>
                <span>Admin</span>
            </div>
        </div>
    </div>
</div>
