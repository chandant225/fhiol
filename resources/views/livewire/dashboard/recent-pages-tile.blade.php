<div class="card shadow-none" wire:init="loadPosts">
    <div class="card-header">
        <h3 class="card-title">Pages</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div wire:loading.flex class="align-items-center justify-content-center" style="min-height: 200px; width: 100%;">
            <div class="overlay"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>
        </div>
        <table class="table table-borderless" wire:loading.class="d-none">
            @foreach ($pages as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td class="text-sm">{{ $post->views }} views</td>
                <td class="text-sm">{{ $post->created_at->isoFormat('ll') }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="card-footer bg-transparent">
        <a class="btn btn-light btn-sm" href="{{ route('backend.pages.index') }}">View all</a>
    </div>
</div>
