<?php

namespace App\Http\Livewire\Frontend;

use App\Product;
use App\ProductInquiry;
use Illuminate\Support\Facades\Mail;
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

        $productInquiry = ProductInquiry::create([
            'customer_name' => $this->customerName,
            'customer_phone' => $this->customerPhone,
            'email' => $this->customerEmail,
            'message' => $this->message,
            'product_id' => $this->product->id
        ]);

        Mail::to(notification_email_receiver())->send(new \App\Mail\InquiryMail($productInquiry));

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
