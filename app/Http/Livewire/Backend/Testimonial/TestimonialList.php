<?php

namespace App\Http\Livewire\Backend\Testimonial;

use App\Service\ImageService;
use App\Testimonial;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TestimonialList extends Component
{
    use LivewireAlert;
    public $sortMode = false;

    protected $listeners = [
        'testimonialCreated' => 'reload',
        'testimonialUpdated' => 'reload',
        'deleteTestimonial' => 'deleteTestimonial',
    ];

    public function reload()
    {
        //
    }

    public function deleteTestimonial(Testimonial $testimonial)
    {
        $imageService = new ImageService();
        $imageService->unlinkImage($testimonial->client_photo);
        $testimonial->delete();
        Testimonial::clearCache();
        $this->alert('success', 'Record deleted');
        $this->dispatchBrowserEvent('hide-testimonial-form');
    }

    public function render()
    {
        $testimonials = Testimonial::positioned()->get();

        return view('livewire.backend.testimonial.testimonial-list', compact('testimonials'));
    }

    public function sortTestimonials($items)
    {
        foreach ($items as $item) {
            Testimonial::where('id', $item['value'])->update(['position' => $item['order']]);
        }
        Testimonial::clearCache();
    }
}
