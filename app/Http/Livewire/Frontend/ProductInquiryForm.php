<?php

namespace App\Http\Livewire\Frontend;

use App\Product;
use App\ProductInquiry;
use Livewire\Component;

class ProductInquiryForm extends Component
{
    public Product $product;

    public $customerName;
    public $customerPhone;
    public $customerEmail;
    public $message;

    protected function rules()
    {
        return [
            'customerName' => 'required',
            'customerPhone' => 'required',
            'customerEmail' => 'required',
            'message' => 'nullable',
        ];
    }

    public function send()
    {
        $this->validate();

        ProductInquiry::create([
            'customer_name' => $this->customerName,
            'customer_phone' => $this->customerPhone,
            // 'customer_email' => $this->customerEmail,
            'message' => $this->message,
            'product_id' => $this->product->id
        ]);

        $this->alert('success', 'Your inquiry has been registered', [
            'text' => 'We will reach back to you as very soon.'
        ]);

        $this->reset(['message']);
        $this->dispatchBrowserEvent('close-inquiry-modal');
    }

    public function render()
    {
        return view('livewire.frontend.product-inquiry-form');
    }
}
