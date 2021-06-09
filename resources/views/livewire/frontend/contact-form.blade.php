<div class="contact-form shadow p-4">
    <div class="mb-3">
        <h4 class="block-title">Reach out to us for any inquiry</h4>
        <p class="block-description">Feel free to get in touch with us by adding names, email, and a brief message. We acknowledge your problem like nobody else. We will get back to you ASAP.</p>
    </div>
    <form wire:submit.prevent="send()" method="POST">
        <div class="form-group">
            <label for="" class="required">Full Name</label>
            <input type="text" wire:model="name" class="form-control bg-light rounded-0 @error('name') is-invalid  @enderror">
            <x-invalid-feedback field="name"></x-invalid-feedback>
        </div>
        <div class="form-group">
            <label for="" class="required">E-mail</label>
            <input type="text" wire:model.defer="email" class="form-control bg-light rounded-0 @error('email') is-invalid  @enderror">
            <x-invalid-feedback field="email"></x-invalid-feedback>
        </div>
        <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" wire:model.defer="mobile" class="form-control bg-light rounded-0 @error('mobile') is-invalid  @enderror">
            <x-invalid-feedback field="mobile"></x-invalid-feedback>
        </div>
        <div class="form-group">
            <label for="" class="required">Message</label>
            <textarea wire:model.defer="message" class="form-control bg-light rounded-0 @error('message') is-invalid  @enderror" cols="30" rows="5"></textarea>
            <x-invalid-feedback field="message"></x-invalid-feedback>
        </div>
        @if($sent == true)
        <div class="form-group">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Your message has been sent. We will get back to you as early as possible.</div>
        </div>
        <script>
            setTimeout(() => {
                @this.sent = false;
            }, 10000);
        </script>
        @endif
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-theme-accent w-100 rounded-0">
                <span wire:loading.remove>Send Now</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </form>
</div>
