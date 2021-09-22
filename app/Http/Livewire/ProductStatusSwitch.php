<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductStatusSwitch extends Component
{
    public Product $product;
    public $status;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->status = $product->status;
    }

    public function updatedStatus()
    {
        $this->product->update(['status' => $this->status]);
        $currentStatus = $this->status ? 'active' : 'Inactive';

        $this->alert('success', "Status changed to $currentStatus" , [
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
      ]);
    }

    public function render()
    {
        return view('livewire.product-status-switch');
    }
}
