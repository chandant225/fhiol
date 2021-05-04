<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password = [
        'old_password' => null,
        'password' => null,
        'password_confirmation' => null,
    ];

    protected $rules = [
        'password.old_password' => 'required',
        'password.password' => 'required|confirmed',
        'password.password_confirmation' => 'required',
    ];

    protected $validationAttributes = [
        'password.old_password' => 'old password',
        'password.password' => 'password',
        'password.password_confirmation' => 'password confirmation',
    ];

    public function change()
    {
        $this->validate();

        if (!Hash::check($this->password['old_password'], auth()->user()->password)) {
            $this->alert('error', 'Sorry the password you entered is incorrect.');
            return;
        }

        auth()->user()->update([
            'password' => bcrypt($this->password['password'])
        ]);

        $this->reset('password');
        $this->alert('success', 'Password Changed');
    }

    public function render()
    {
        return view('livewire.backend.change-password');
    }
}
