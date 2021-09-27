<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Popup;
use App\Service\ImageService;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function index()
    {
        $popup = Popup::first();

        if (!$popup) {
            $popup = new Popup();
        }

        return view('popup.index', [
            'title' => 'Popup Banner',
            'popup' => $popup,
            'imagePreview' => $popup->image ?
                $popup->imageUrl()
                : 'https://dummyimage.com/600x400/f0f0f0/151730&text=(No+Image+Selected)'
        ]);
    }

    public function store(Request $request, ImageService $imageService)
    {
        $request->validate([
            'type' => 'required',
            'image' => 'nullable',
            'content' => 'nullable',
            'link' => 'nullable',
            'active' => 'nullable',
        ]);

        $popup = Popup::first();

        if (!$popup) {
            $popup = new Popup();
        }

        $popup->type = $request->type;
        $popup->content = $request->content;
        $popup->link = $request->link;
        $popup->active = $request->active ?: false;
        $popup->options = [
            'enable_session' => $request->has('options.enable_session') ?: false,
            'popup_delay' => $request->options['popup_delay'] ?: false,
        ];
        $popup->save();

        if ($request->hasFile('image')) {
            $popup->image = $imageService->swapImage($popup->getOriginal('image'), $request->file('image'));
            $popup->save();
        }

        return back()->with('success', 'Popup banner has been updated');
    }
}
