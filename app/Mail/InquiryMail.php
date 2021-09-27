<?php

namespace App\Mail;

use App\ProductInquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public ProductInquiry $productInquiry;

    public function __construct(ProductInquiry $productInquiry)
    {
        $this->productInquiry = $productInquiry;
    }

    public function build()
    {
        return $this->subject('New Product Inquiry: ' . $this->productInquiry->customer_name)
            ->markdown('emails.inquiry');
    }
}
