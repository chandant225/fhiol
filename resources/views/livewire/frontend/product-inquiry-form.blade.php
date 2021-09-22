<form wire:submit.prevent="send" class="form">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Name</label>
            <input type="text" wire:model.defer="customerName" class="form-control @error('customerName') is-invalid @enderror" placeholder="Your Name" onkeyup="localStorage.setItem('customer-name', this.value)">
            <x-invalid-feedback field="customerName"></x-invalid-feedback>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" wire:model.defer="customerPhone" class="form-control @error('customerPhone') is-invalid @enderror" placeholder="Your Phone Number" onkeyup="localStorage.setItem('customer-phone', this.value)">
            <x-invalid-feedback field="customerPhone"></x-invalid-feedback>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">E-mail Address</label>
            <input type="text" wire:model.defer="customerEmail" class="form-control @error('customerEmail') is-invalid @enderror" placeholder="Your E-mail Address" onkeyup="localStorage.setItem('customer-phone', this.value)">
            <x-invalid-feedback field="customerEmail"></x-invalid-feedback>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Message</label>
            <textarea wire:model.defer="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="5" placeholder="Anything you wanna say?"></textarea>
            <x-invalid-feedback field="message"></x-invalid-feedback>
        </div>
        <div class="col-md-12 d-flex gap-3">
            {{-- <button type="button" class="btn btn-outline-danger" role="button" onclick="window.dispatchEvent(new CustomEvent('close-inquiry-modal'))">Cancel</button> --}}
            <button type="submit" class="btn btn-theme-primary ml-auto">
                <span class="me-1">
                    <svg style="height: 1rem;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                    </svg>
                </span>Send Inquiry</button>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function() {
            let storageCustomerName = localStorage.getItem('customer-name') || null;
            let storageCustomerPhone = localStorage.getItem('customer-phone') || null;

            if (storageCustomerName != null) {
                @this.customerName = storageCustomerName
            }

            if (storageCustomerPhone != null) {
                @this.customerPhone = storageCustomerPhone
            }

        })

    </script>
</form>
