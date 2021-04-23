<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $guarded = ['id'];

    public static $THUMBNAIL_DIR_NAME = 'thumbnail';
    public static $MEDIUM_DIR_NAME = 'medium';

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function imageUrl($size = 'original')
    {
        if ($size == 'thumb') {
            return Storage::url('thumbnail/' . $this->path);
        }

        if ($size == 'medium') {
            return Storage::url('medium/' . $this->path);
        }

        return Storage::url($this->path);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
