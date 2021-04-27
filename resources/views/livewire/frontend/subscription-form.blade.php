<div>
    <form wire:submit.prevent="subscribe()" class="subscribe-form mt-3">
        <input wire:model.defer="email" type="text" placeholder="Your email id" value="" aria-required="true" aria-invalid="false" autocomplete="off">
        <button class="">Subscribe</button>
    </form>
    @error('email')
    <p class="text-danger mt-1">{{ $message }}</p>
    @enderror
</div>
