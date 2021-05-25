<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="save" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" wire:model="catalogue.title" class="form-control @error('catalogue.title') is-invalid @enderror">
                <x-invalid-feedback field="catalogue.title"></x-invalid-feedback>
            </div>
            <div class="form-group">
                <label for="customFile">Choose file</label>
                <input type="file" wire:model="file" class="@error('file') is-invalid @enderror" id="customFile">
                <x-invalid-feedback field="file"></x-invalid-feedback>
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
