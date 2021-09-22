 <form wire:submit.prevent="save">
     <div class="form-group">
         <label class="text-sm">Client Name</label>
         <input type="text" wire:model="testimonial.client_name" class="form-control @error('testimonial.client_name') is-invalid @enderror">
         <x-invalid-feedback field="testimonial.client_name"></x-invalid-feedback>
     </div>
     <div class="form-group">
         <label class="text-sm">Client Title</label>
         <input type="text" wire:model="testimonial.client_title" class="form-control @error('testimonial.client_title') is-invalid @enderror">
         <x-invalid-feedback field="testimonial.client_title"></x-invalid-feedback>
     </div>
     <div class="form-group">
         <label class="text-sm">Content</label>
         <textarea wire:model="testimonial.content" class="form-control @error('testimonial.content') is-invalid @enderror" cols="30" rows="8"></textarea>
         <x-invalid-feedback field="testimonial.content"></x-invalid-feedback>
     </div>
     <div class="form-group">
         <div class="d-flex">
             <div class="align-self-center">
                 @if($photo)
                 <img src="{{ $photo->temporaryUrl() }}" style="height: 3rem; width: 3rem; border-radius: 50%;">
                 @else
                 <img src="https://ui-avatars.com/api/?background=4f46e5&color=fff" style="height: 3rem; width: 3rem; border-radius: 50%;">
                 @endif
             </div>
             <div class="ml-2 align-self-center">
                 <input type="file" wire:model="photo" class="d-none" id="profile-photo">
                 @if($photo)
                 <button wire:click="deletePhoto" type="button" role="button" class="btn btn-sm btn-light">Remove</button>
                 @else
                 <label class="btn btn-primary btn-sm mb-0" for="profile-photo" style="font-size: .8rem; font-weight: normal;">Upload a new photo</label>
                 @endif
             </div>
         </div>
         @error('photo')
         <small class="text-red">{{ $message }}</small>
         @enderror
     </div>
     <div class="form-group d-flex mt-4">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary ml-auto">Save changes</button>
     </div>
 </form>
