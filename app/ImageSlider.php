<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Support\Facades\Storage;

class ImageSlider extends Model
{
    use Uuid, SoftDeletes;

    protected $guarded = [];

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $casts = [
        'open_in_new_tab' => 'boolean',
    ];


    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', false);
    }

    public function scopePositioned($query)
    {
        return $query->orderBy('position', 'desc');
    }

    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->image_path);
    }
}
