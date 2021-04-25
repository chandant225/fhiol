<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\ImageSlider;

class ImagesliderController extends Controller
{
    public function index()
    {
        $imageSliders = ImageSlider::select(['group', 'image_path', 'title', 'position', 'action_link', 'open_in_new_tab'])->active();

        if (request()->get('group')) {
            $imageSliders = $imageSliders->where('group', request()->get('group'));
        }

        $imageSliders = $imageSliders->positioned()->get();

        $imageSliders->each(function ($imageSlider) {
            return $imageSlider['image_url'] = $imageSlider->image_url;
        });

        return $imageSliders;
    }
}
