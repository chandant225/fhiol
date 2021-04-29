<?php

namespace App\Http\Livewire\Backend;

use App\Store;
use Livewire\Component;
use Livewire\WithPagination;

class StoreList extends Component
{
    use WithPagination;

    public $paginate = 15;

    public function render()
    {
        $stores = Store::latest()->paginate($this->paginate);

        return view('livewire.backend.store-list', [
            'stores' => $stores
        ]);
    }
}
