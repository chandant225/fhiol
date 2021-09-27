<?php

namespace App\Mail;

use App\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public ContactUs $contactUs;

    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }

    public function build()
    {
        return $this->subject('New Contact Us: ' . $this->contactUs->name)
            ->markdown('emails.contact');
    }
}
