<?php

namespace App\Http\Livewire\Backend;

use App\Store;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StoreList extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $paginate = 15;

    public function render()
    {
        $stores = Store::latest()->paginate($this->paginate);

        return view('livewire.backend.store-list', [
            'stores' => $stores
        ]);
    }
}
