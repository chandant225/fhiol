<?php

namespace App\View\Components\Frontend;

use App\Popup;
use Illuminate\View\Component;

class PopupBanner extends Component
{
    public Popup $popup;

    public function __construct()
    {
        //
    }

    public function render()
    {
        $popup = Popup::first();
        if (!$popup) {
            $popup = new Popup();
        }
        $this->popup = $popup;

        return view('components.frontend.popup-banner',[
            'delay' => $this->popup->getOption('popup_delay'),
            'active' => $this->popup->active,
            'type' => $this->popup->type,
            'sessionEnabled' => $this->popup->getOption('enable_session'),
        ]);
    }
}
