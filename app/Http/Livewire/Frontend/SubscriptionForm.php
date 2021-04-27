<?php

namespace App\Http\Livewire\Frontend;

use App\Subscriber;
use Livewire\Component;

class SubscriptionForm extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscribers,email'
    ];

    protected $messages = [
        'email.email' => 'Please enter a valid email address.',
        'email.unique' => 'You are already in our subscription list.'
    ];

    public function subscribe()
    {
        $this->validate();
        Subscriber::create([
            'email' => $this->email
        ]);

        $this->reset('email');

        $this->alert('success', 'Subscribed to ' . config('app.name'));
    }

    public function render()
    {
        return view('livewire.frontend.subscription-form');
    }
}
