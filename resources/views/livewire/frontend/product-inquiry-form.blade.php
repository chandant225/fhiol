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
            <label class="form-label">Message</label>
            <textarea wire:model.defer="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="5" placeholder="Anything you wanna say?"></textarea>
            <x-invalid-feedback field="message"></x-invalid-feedback>
        </div>
        <div class="col-md-12 d-flex gap-3">
            <button type="button" class="btn btn-outline-danger" role="button" onclick="window.dispatchEvent(new CustomEvent('close-inquiry-modal'))">Cancel</button>
            <button type="submit" class="btn btn-theme-primary ml-auto">Send Inquiry</button>
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
