<div class="card shadow-none" wire:init="loadPosts">
    <div class="card-header">
        <h3 class="card-title">Recent Posts</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div wire:loading.flex class="align-items-center justify-content-center" style="min-height: 200px; width: 100%;">
            <div class="overlay"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>
        </div>
        <table class="table table-borderless" wire:loading.class="d-none">
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td class="text-sm">{{ $post->views }} views</td>
                <td class="text-sm">{{ $post->created_at->isoFormat('ll') }}</td>
                <td class="text-sm">
                    @if($post->isPublished())
                    <span class="badge bg-primary">Live</span>
                    @else
                    <span class="badge bg-danger">Draft</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="card-footer bg-transparent">
        <a class="btn btn-light btn-sm" href="{{ route('backend.posts.index') }}">View all</a>
    </div>
</div>
