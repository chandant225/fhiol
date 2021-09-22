<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $guarded = ['id'];

    const THUMBNAIL_DIR_NAME = 'thumbnail';
    const MEDIUM_DIR_NAME = 'medium';

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function imageUrl($size = 'original')
    {
        if ($size == 'thumb' && $this->thumbnail_path) {
            return Storage::url($this->thumbnail_path);
        }

        if ($size == 'medium' && $this->medium_path) {
            return Storage::url($this->medium_path);
        }

        return Storage::url($this->path);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function generateOtherSizeImages($image)
    {
        
    }
}
