<?php

namespace App\Alert;

class Alert
{
    protected $alert = [
        'message' => null,
        'type' => 'success',
        'options' =>  [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => null,
            'showCancelButton' => false,
            'showConfirmButton' => false
        ]
    ];

    public function message($message)
    {
        $this->alert['message'] = $message;
        return $this;
    }

    public function text($text)
    {
        $this->alert['options']['text'] = $text;
        return $this;
    }

    private function setType($type)
    {
        $this->alert['type'] = $type;
    }

    public function success()
    {
        $this->setType('success');
        return $this;
    }

    public function info()
    {
        $this->setType('info');
        return $this;
    }

    public function warning()
    {
        $this->setType('warning');
        return $this;
    }

    public function error()
    {
        $this->setType('error');
        return $this;
    }

    public function send()
    {
        session()->flash('livewire-alert', $this->alert);
    }
}
