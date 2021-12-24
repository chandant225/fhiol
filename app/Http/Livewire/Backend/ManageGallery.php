<?php

namespace App\Http\Livewire\Backend;

use App\Gallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Intervention\Image\Facades\Image;


class ManageGallery extends Component
{
    use WithFileUploads, LivewireAlert;
    public $images;
    public function render()
    {
        $galleries=Gallery::orderBy('order','desc')->get();
        return view('livewire.backend.manage-gallery',compact('galleries'));
    }



    function store(){
        ini_set("memory_limit","256M");
        ini_set("max_execution_time", "300");
        $this->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        //get max order
        $maxOrder=Gallery::max('order');
        $imageNum=1;
        foreach($this->images as $image){
                // save image
                $gallery['image_path'] = $image->store('gallery_images');
                $thumbnailName='gallery_images/thumbnail/'. $imageNum. time().'.'. $image->getClientOriginalExtension();
                $imageNum++;
                $img=Image::make($image->getRealPath())->fit(200,200);
                $img->stream();
                Storage::disk('public')->put($thumbnailName,$img);
                $gallery['thumbnail'] = $thumbnailName;


                $gallery['order']=$maxOrder+1;
                $maxOrder++;
                Gallery::create($gallery);
        }
        $this->render();
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

    function updateImageOrder($arr){
        //get max order from $arr
        $maxOrder=max($arr);
        foreach($arr as $order){
            Gallery::find($order['value'])->update(['order' => $maxOrder['order']-$order['order']]);
        }
    }
}
