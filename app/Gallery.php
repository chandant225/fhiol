<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $guarded=['id'];
    protected $appends=['image_url'];

    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->image_path);
    }
}
