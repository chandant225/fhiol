<?php

namespace App\Http\Livewire\Frontend;

use App\ContactUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactForm extends Component
{
    use LivewireAlert;
    
    public $name;
    public $email;
    public $mobile;
    public $subject;
    public $message;
    public $sent;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
        'subject' => 'required',
        'message' => 'required'
    ];

    public function mount()
    {
        //
    }

    public function send()
    {
        $this->validate();

        $contactUs = ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'subject' => $this->subject,
            'message' => $this->message
        ]);

        Mail::to(notification_email_receiver())->send(new \App\Mail\ContactMail($contactUs));

        $this->sent = true;

        $this->alert('success', 'Message Sent');

        $this->reset(['name', 'email', 'mobile', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.frontend.contact-form');
    }
}
