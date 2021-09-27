<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $guarded = [];

    protected $casts = [
        'options' => 'array',
        'active' => 'boolean',
    ];

    public function getOption($key)
    {
        return $this->options[$key] ?? null;
    }

    public function imageUrl()
    {
        return get_uploads_url($this->image);
    }
}
