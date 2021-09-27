<div class="contact-form  p-4">
    <div class="mb-3">
        <h4 class="block-title">Reach out to us for any inquiry</h4>
        <p class="block-description">Feel free to get in touch with us by adding names, email, and a brief message. We acknowledge your problem like nobody else. We will get back to you ASAP.</p>
    </div>
    <form wire:submit.prevent="send()" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="required">Full Name</label>
                    <input type="text" wire:model.defer="name" class="form-control bg-light rounded-0 @error('name') is-invalid  @enderror">
                    <x-invalid-feedback field="name"></x-invalid-feedback>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="required">E-mail</label>
                    <input type="text" wire:model.defer="email" class="form-control bg-light rounded-0 @error('email') is-invalid  @enderror">
                    <x-invalid-feedback field="email"></x-invalid-feedback>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="">Mobile</label>
            <input type="text" wire:model.defer="mobile" class="form-control bg-light rounded-0 @error('mobile') is-invalid  @enderror">
            <x-invalid-feedback field="mobile"></x-invalid-feedback>
        </div>
        <div class="mb-3">
            <label class="required">Subject</label>
            <input type="text" wire:model.defer="subject" class="form-control bg-light rounded-0 @error('subject') is-invalid  @enderror">
            <x-invalid-feedback field="subject"></x-invalid-feedback>
        </div>
        <div class="mb-3">
            <label for="" class="required">Message</label>
            <textarea wire:model.defer="message" class="form-control bg-light rounded-0 @error('message') is-invalid  @enderror" cols="30" rows="5"></textarea>
            <x-invalid-feedback field="message"></x-invalid-feedback>
        </div>
        @if($sent == true)
        <div class="mb-3">
            <div class="alert alert-success">
                Your message has been sent. Thanks for reaching us out. We will get back to you as early as possible.
            </div>
        </div>
        <script>
            setTimeout(() => {
                @this.sent = false;
            }, 10000);

        </script>
        @endif
        <div class="mb-3">
            <button type="submit" class="btn btn-lg btn-theme-primary w-100 rounded-0" wire:target="send">
                <span wire:loading.remove>Send Now</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </form>
</div>
