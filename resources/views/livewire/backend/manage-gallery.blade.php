<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Add Photo
            </h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image <span class="text-danger">*</span></label>
                            <input class="form-control" wire:loading.attr="disabled" wire:target="images" type="file" multiple wire:model="images" accept="image/*" id="formFile">
                            @error('images') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div style="overflow-x: auto" class="col-md-4 d-flex">
                        @if(isset($images))
                            @foreach($images as $image)
                                <img src="{{ $image->temporaryUrl() }}" style="height:150px; width:auto;" class="img img-responsive img-thumbnail">
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="row">
                    <button type="submit" wire:loading.attr="disabled" wire:target="images" class="btn btn-success"><span wire:loading.remove wire:target="images">Save Images</span><span wire:loading wire:target="images">Uploading Images...</span></button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                List of Photos
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($galleries as $image)
                <div class="col-md-3" style="position:relative">
                    <img src="{{ $image->image_url }}" style="max-height:250px; width:auto;" class="img img-responsive img-thumbnail">
                    <button wire:loading.attr="disabled" wire:target="deleteImage({{ $image->id }})" style="position: absolute; right:0.5rem; top:0;" wire:key="{{ $image->id }}" onclick="return confirm('Do you want to delete this image?')||event.stopImmediatePropagation()" wire:click="deleteImage({{ $image->id }})" class="btn btn-danger btn-sm"><i wire:loading.remove wire:target="deleteImage({{ $image->id }})" class="fas fa-trash"></i><i wire:loading wire:target="deleteImage({{ $image->id }})" class="fas fa-spin fa-spinner"></i></button>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
