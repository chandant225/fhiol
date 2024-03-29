<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Add Certification
            </h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="store">
                @if($this->editing)
                    <span class="text-info">Editing Certification: <span class="font-weight-bold">{{ $certification->name }}</span> </span>
                @endif
                <div class="row">
                    <div class="col-md-5">
                        <label for="name">Title <span class="text-danger">*</span></label>
                        <input type="text" @if($editing) autofocus @endif class="form-control" wire:model.defer="certification.name">
                        @error('certification.name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    @if(!$this->editing)
                        <div class="col-md-4">
                            <div class="">
                                <label for="formFile" class="form-label">Image <span class="text-danger">*</span></label>
                                <input class="form-control" wire:loading.attr="disabled" wire:target="image" type="file" wire:model="image" accept="image/*" id="formFile{{ $iteration }}">
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div style="overflow-x: auto" class="col-md-3 d-flex">
                            @if(isset($image))
                                    <img src="{{ $image->temporaryUrl() }}" style="height:150px; width:auto;" class="img img-responsive img-thumbnail">
                            @endif
                        </div>
                    @endif
                </div>
                <div class="row mt-2">
                    <button type="submit" wire:loading.attr="disabled" wire:target="images" class="btn btn-success"><span wire:loading.remove wire:target="images">Save Certification</span><span wire:loading wire:target="images">Uploading Images...</span></button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                List of Photos <small class="text-warning font-weight-bold">Dimension of image should be less than 6000x6000</small> <strong class="text-sm text-info" wire:loading wire:target="updateImageOrder"> <i class="fas fa-spin fa-spinner"></i> Updating Image Order </strong>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">

                <ul class="d-flex flex-wrap" wire:sortable="updateImageOrder">
                    @forelse ($certifications as $image)
                        <li class="flex-grow-0 img-thumbnail"  style="list-style: none;" wire:sortable.item="{{ $image->id }}" wire:key="image-{{ $image->id }}">
                            <div style="position: relative">
                                <img src="{{ $image->thumbnail_path?$image->thumbnail_url:$image->image_url }}" style="height:200px; width:200px; object-fit:cover" class="img img-responsive">
                                <div style="position: absolute; right:0rem; top:0;" class="d-flex">
                                    <button wire:loading.attr="disabled" wire:target="deleteImage({{ $image->id }})"  wire:key="{{ $image->id }}" onclick="return confirm('Do you want to delete this image?')||event.stopImmediatePropagation()" wire:click="deleteImage({{ $image->id }})" class="btn btn-danger btn-sm"><i wire:loading.remove wire:target="deleteImage({{ $image->id }})" class="fas fa-trash"></i><i wire:loading wire:target="deleteImage({{ $image->id }})" class="fas fa-spin fa-spinner"></i></button>
                                </div>
                                <button wire:sortable.handle class="btn btn-success btn-sm" style="position: absolute; left:0; top:0;" wire:key="drag{{ $image->id }}"> <i class="fas fa-arrows-alt"></i> </button>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>{{ $image->name }}</div>
                                <div><i wire:click="editImage({{ $image->id }})"  wire:key="{{ $image->id }}" wire:loading.remove wire:target="editImage({{ $image->id }})" class="fas fa-edit text-info" style="cursor: pointer"></i><i wire:loading wire:target="editImage({{ $image->id }})" class="fas fa-spin fa-spinner"></i></div>
                            </div>
                        </li>
                    @empty
                        <div class="text-danger font-weight-bold text-center w-100">No Certifications</div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
