<?php

namespace App\View\Components\Frontend\Partials;

use App\ImageSlider;
use Illuminate\View\Component;

class PrimaryImageSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $slides = ImageSlider::select(['group', 'image_path', 'title', 'position', 'action_link', 'open_in_new_tab'])
            ->where('group', 'primary')
            ->active()->get();

        $slides->each(function ($slide) {
            return $slide['image_url'] = $slide->image_url;
        });

        return view('components.frontend.partials.primary-image-slider', compact('slides'));
    }
}
