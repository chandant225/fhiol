<?php

namespace App\Http\Livewire\Backend\Testimonial;

use App\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public Testimonial $testimonial;
    public $photo;

    protected $listeners = [
        'editTestimonial' => 'editTestimonial'
    ];

    protected function rules()
    {
        return [
            'testimonial.client_name' => 'required',
            'testimonial.client_title' => 'required',
            'testimonial.content' => 'required',
            'photo' => 'nullable|image|max:1024',
        ];
    }

    public function mount()
    {
        $this->testimonial = new Testimonial();
    }

    public function save()
    {
        $this->validate();
        if ($this->photo) {
            $this->testimonial->client_photo = $this->photo->store('testimonial-photos');
        }
        $this->testimonial->save();
        $this->testimonial = new Testimonial();
        Testimonial::clearCache();
        $this->reset('photo');
        $this->alert('success', 'Testimonal saved');
        $this->emit('testimonialCreated');
        $this->dispatchBrowserEvent('hide-testimonial-form');
    }

    public function editTestimonial(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
        $this->dispatchBrowserEvent('show-testimonial-form');
    }

    public function deletePhoto()
    {
        $this->reset('photo');
    }

    public function render()
    {
        return view('livewire.backend.testimonial.form');
    }
}
