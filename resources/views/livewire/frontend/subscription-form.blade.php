<div>
    <form wire:submit.prevent="subscribe()" class="subscribe-form mt-3">
        <div class="input-box">
            <input wire:model.defer="email" type="email" placeholder="Enter your email" value="" aria-required="true" aria-invalid="false" autocomplete="off">
        </div>
        <div class="input-box">
            <input type="submit" value="Subscribe">
        </div>
    </form>
    @error('email')
    <p class="text-danger mt-1">{{ $message }}</p>
    @enderror
</div>
