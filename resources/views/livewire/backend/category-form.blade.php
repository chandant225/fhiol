<x-box class="border-0 shadow rounded">
    <div class="card-header">
        <h5>{{ $category->exists ? 'Update Category' : 'Add New Category' }}</h5>
    </div>
    <div class="card-body">

        <form wire:submit.prevent="{{ $category->exists ? 'update' : 'save' }}">
            <div class="form-group">
                <label class="required">Name</label>
                <input type="text" wire:model="category.name" class="form-control">
                @error('category.name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Url Friendly Slug</label>
                <input type="text" wire:model="category.slug" class="form-control">
            </div>

            {{-- <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" wire:model="category.description"></textarea>
            </div>
             --}}
            <div class="form-group">
              <button class="btn btn-primary ml-0">{{ $category->exists ? 'Update' : 'Add Category' }}</button>
              @if($category->exists)
              <button type="button" class="btn btn-danger" wire:click.prevent="cancelEditing">Cancel</button>
              @endif
            </div>
        </form>
    </div>
</x-box>