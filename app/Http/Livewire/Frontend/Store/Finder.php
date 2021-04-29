<?php

namespace App\Http\Livewire\Frontend\Store;

use App\Store;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Finder extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchText = null;
    public $paginate = 15;

    protected $queryString = [
        'searchText' => ['except' => null],
        'page' => ['except' => 1],
    ];

    public function updatingSearchText()
    {
        $this->resetPage();
    }

    public function render()
    {
        $stores = Store::orderBy('name');

        $stores = $this->filter($stores)->paginate($this->paginate);

        return view('livewire.frontend.store.finder', [
            'stores' => $stores
        ]);
    }

    public function filter(Builder $query)
    {
        if ($this->searchText) {
            $query->where('city', 'like', '%' . $this->searchText . '%');
        }

        return $query;
    }
}
