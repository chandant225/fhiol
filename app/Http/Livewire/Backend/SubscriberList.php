<?php

namespace App\Http\Livewire\Backend;

use App\Subscriber;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SubscriberList extends Component
{
    use LivewireAlert;
    public $paginate = 15;

    public function trash(Subscriber $subscriber)
    {
        $subscriber->delete();

        $this->alert('success', 'Subscriber removed successfully');
    }

    public function render()
    {
        $subscribers = Subscriber::latest()->paginate($this->paginate);

        return view('livewire.backend.subscriber-list', [
            'subscribers' => $subscribers
        ]);
    }
}
