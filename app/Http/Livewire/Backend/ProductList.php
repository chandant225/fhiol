<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductList extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $paginate = 15;
    protected $paginationTheme = 'bootstrap';

    public $filter = [
        'name' => null,
        'category_id' => 'all',
        'status' => true,
        'trashed' => null,
    ];

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        $products = Product::with(['category']);
        $products = $this->filter($products)
            ->orderBy('category_id','desc')
            ->orderBy('order','desc')
            ->paginate($this->paginate);

        return view('livewire.backend.product-list', [
            'products' => $products
        ]);
    }

    private function filter(Builder $products)
    {
        if ($this->filter['name']) {
            $products = $products->whereName($this->filter['name']);
        }

        if ($this->filter['category_id'] && $this->filter['category_id'] != 'all') {
            $products = $products->where('category_id', $this->filter['category_id']);
        }

        if ($this->filter['status'] != 'all') {
            if ($this->filter['status'] == 'active') {
                $products = $products->active(true);
            }

            if ($this->filter['status'] == 'inactive') {
                $products = $products->active(false);
            }
        }

        if ($this->filter['trashed'] != null) {
            $products = $products->onlyTrashed();
        }

        return $products;
    }

    public function search()
    {
        //
    }

    function sortProducts($arr){
        //get max order from $arr
        $maxOrder=max($arr);
        foreach($arr as $order){
            Product::find($order['value'])->update(['order' => $maxOrder['order']-$order['order']]);
        }
    }
}
