<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $guarded = [];

    public function downloadUrl()
    {
        return asset('storage/' . $this->path);
    }

    public function isImage()
    {
        if (!$this->path) {
            return false;
        }
        $imageExtensions = [
            'jpg', 'jpeg',
            'gif', 'png',
            'bmp', 'svg',
            'jpe', 'wbmp'
        ];
        $exploded = explode('.', $this->path);
        $extension = end($exploded);

        return in_array($extension, $imageExtensions);
    }

    public function downloadable()
    {
        return $this->morphTo();
    }
}
