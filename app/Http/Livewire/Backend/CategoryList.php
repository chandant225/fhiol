<?php

namespace App\Http\Livewire\Backend;

use App\Category;
use Livewire\Component;

class CategoryList extends Component
{

    public function render()
    {
        $categories = Category::with('subCategories')->whereNull('parent_id')->orderBy('order','desc')->get();

        return view('livewire.backend.category-list',compact('categories'));
    }


    function sortCategories($arr){
        //get max order from $arr
        $maxOrder=max($arr);
        foreach($arr as $order){
            Category::find($order['value'])->update(['order' => $maxOrder['order']-$order['order']]);
        }
    }
}
