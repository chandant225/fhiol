<x-box class="border-0 shadow rounded">
    <div class="card-header">
        <h5>{{ $postCategory->exists ? 'Update Category' : 'Add New Category' }}</h5>
    </div>
    <div class="card-body">

        <form wire:submit.prevent="{{ $postCategory->exists ? 'update' : 'save' }}">
            <div class="form-group">
                <label class="required">Name</label>
                <input type="text" wire:model="postCategory.name" class="form-control @error('postCategory.name') is-invalid @enderror">
                <x-invalid-feedback field="postCategory.name"></x-invalid-feedback>
            </div>

            <div class="form-group">
                <label>Url Friendly Slug</label>
                <input type="text" wire:model="postCategory.slug" class="form-control @error('postCategory.slug') is-invalid @enderror">
                <x-invalid-feedback field="postCategory.slug"></x-invalid-feedback>
            </div>

            {{-- <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" wire:model="postCategory.description"></textarea>
            </div>
             --}}
            <div class="form-group">
                <button class="btn btn-primary ml-0">{{ $postCategory->exists ? 'Update' : 'Add Category' }}</button>
                @if($postCategory->exists)
                <button type="button" class="btn btn-danger" wire:click.prevent="cancelEditing" role="button">Cancel</button>
                @endif
            </div>
        </form>
    </div>
</x-box>
