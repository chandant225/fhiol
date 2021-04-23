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
        if ($size == 'thumb') {
            return Storage::url(self::THUMBNAIL_DIR_NAME . '/' . $this->path);
        }

        if ($size == 'medium') {
            return Storage::url(self::MEDIUM_DIR_NAME . '/' . $this->path);
        }

        return Storage::url($this->path);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
