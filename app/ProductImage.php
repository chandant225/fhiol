<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $guarded = ['id'];

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function smallImageUrl()
    {
        return Storage::url('thumbnail/' . $this->path);
    }

    public function mediumImageUrl()
    {
        return 'medium/' . $this->path;
    }

    public function originalImageUrl()
    {
        return Storage::url($this->path);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
