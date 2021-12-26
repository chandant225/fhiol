<?php

namespace App\Http\Livewire\Backend;

use App\Gallery;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Intervention\Image\Facades\Image;


class ManageGallery extends Component
{
    use WithFileUploads, LivewireAlert;
    public $images;
    public $editing=false;
    public $gallery;
    public $iteration=0;

    protected $rules = [
        'gallery.name' => 'required|string|max:255',
    ];

    function mount(Gallery $gallery){
        if(!$this->gallery){
            $this->gallery = new Gallery();
        }
    }


    public function render()
    {
        $galleries=Gallery::orderBy('order','desc')->get();
        return view('livewire.backend.manage-gallery',compact('galleries'));
    }

    function editImage($image_id){
        $this->gallery = Gallery::find($image_id);
        $this->editing=true;
    }

    function update(){
        $this->validate();
        $this->gallery->save();
        $this->resetAll();
        $this->alert('success', 'Gallery updated successfully !');
    }


    function store(){
            if($this->editing) {
                $this->update();
                return;
            }
        $this->rules['images.*'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240';
        $this->validate();
        if(!$this->images){
           throw ValidationException::withMessages([
                'images' => ['Please select at least one image']
            ]);
            return;
        }
        //get max order
        $maxOrder=Gallery::max('order');
        $imageNum=1;
        foreach($this->images as $image){
                // save image
                $gallery['image_path'] = $image->store('gallery_images');
                $thumbnailName='gallery_images/thumbnail/'. $imageNum. time().'.'. $image->getClientOriginalExtension();
                $imageNum++;
                try{
                    $img=Image::make($image->getRealPath())->fit(200,200);

                    Storage::disk('public')->put($thumbnailName,$img->encode('jpg',50));
                    $gallery['thumbnail'] = $thumbnailName;
                }catch(\Exception $e){
                    Log::error($e->getMessage());
                }


                $gallery['order']=$maxOrder+1;
                $gallery['name']=$this->gallery['name'];
                $maxOrder++;
                Gallery::create($gallery);
        }
        $this->resetAll();
        $this->alert('success', 'Image successfully added !');
    }

    function resetAll(){
        $this->images=null;
        $this->editing=false;
        $this->iteration++;
        $this->gallery = new Gallery();
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
