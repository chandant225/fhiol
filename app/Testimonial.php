<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    use SoftDeletes;

    const CACHE_KEY = 'positioned-testimonials';

    protected $guarded = ['id'];

    public function scopePositioned($query)
    {
        return $query->orderBy('position');
    }

    public function clientPhotoUrl()
    {
        return $this->client_photo
            ? Storage::url($this->client_photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->client_name) . '&color=fff&background=4f46e5';
    }

    public static function clearCache()
    {
        Cache::forget(self::CACHE_KEY);
    }
}
