<?php

namespace App\Http\Livewire\Frontend;

use App\ContactUs;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $mobile;
    public $message;
    public $sent;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'message' => 'required'
    ];

    public function mount()
    {
        //
    }

    public function send()
    {
        $this->validate();

        ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'message' => $this->message
        ]);

        $this->sent = true;

        $this->alert('success', 'Message Sent');

        $this->reset(['name', 'email', 'mobile', 'message']);
    }

    public function render()
    {
        return view('livewire.frontend.contact-form');
    }
}
