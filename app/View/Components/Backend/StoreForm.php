<?php

namespace App\View\Components\Backend;

use App\Store;
use Illuminate\View\Component;

class StoreForm extends Component
{
    public Store $store;

    public function __construct(Store $store = null)
    {
        $this->store = $store ?? new Store();
    }

    public function render()
    {
        return view('components.backend.store-form');
    }
}
