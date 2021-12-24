<?php

namespace App\Http\Livewire\Backend;

use App\Certification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Intervention\Image\Facades\Image;


class ManageCertification extends Component
{
    use WithFileUploads, LivewireAlert;
    public $image;
    public $certification;

    protected $rules = [
        'certification.name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    ];

    function mount(Certification $certification){
        if(!$this->certification){
            $this->certification = new Certification();
        }
    }
    public function render()
    {
        $certifications=Certification::orderBy('order','desc')->get();
        return view('livewire.backend.manage-certification',compact('certifications'));
    }

    function edit($cert_id){
        $this->certification = Certification::find($this->cert_id);
    }

    function store(){
        ini_set("memory_limit","1024M");
        ini_set("max_execution_time", "300");
        $this->validate();
                //get max order
                $maxOrder=Certification::max('order');
                // save image
                $this->certification->image_path = $this->image->store('certification_images');
                $thumbnailPath='certification_images/thumbnail/';
                $thumbnailName=time().'.'. $this->image->getClientOriginalExtension();
                $img=Image::make($this->image)->fit(200,200);
                Storage::put($thumbnailPath.$thumbnailName, $img->encode());
                $this->certification->thumbnail_path = $thumbnailPath.$thumbnailName;
                $this->certification->order=$maxOrder+1;

                $this->certification->save();

        $this->reset(['image']);
        $this->certification = new Certification();
        $this->render();
        $this->alert('success', 'Image successfully added !');
    }

    function deleteImage($id){
        $certification = Certification::find($id);
        if(!$certification){
            $this->alert('error', 'Image not found !');
            return ;
        }else{
            try{
                Storage::unlink($certification->image_path);
                Storage::unlink($certification->thumbnail_path);
            }catch(\Exception $e){
                Log::error($e->getMessage());
            }
            $certification->delete();
            $this->alert('success','Images Deleted Successfully');
        }
    }

    function updateImageOrder($arr){
        //get max order from $arr
        $maxOrder=max($arr);
        foreach($arr as $order){
            Certification::find($order['value'])->update(['order' => $maxOrder['order']-$order['order']]);
        }
    }
}
