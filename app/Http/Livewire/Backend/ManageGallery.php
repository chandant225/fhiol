<?php

namespace App\Http\Livewire\Backend;

use App\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ManageGallery extends Component
{
    use WithFileUploads, LivewireAlert;
    public $images;
    public function render()
    {
        $galleries=Gallery::all();
        return view('livewire.backend.manage-gallery',compact('galleries'));
    }

    function store(){
        $this->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        foreach($this->images as $image){
                // save image
                $gallery['image_path'] = $image->store('gallery_images');
                Gallery::create($gallery);
        }
        $this->images=null;
        $this->alert('success', 'Image successfully added !');
    }

    function deleteImage($id){
        $gallery = Gallery::find($id);
        if(!$gallery){
            $this->alert('error', 'Image not found !');
            return ;
        }else{
            $gallery->delete();
            $this->alert('success','Images Deleted Successfully');
        }
    }
}
