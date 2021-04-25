<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Category extends Model
{
    use HasSlug;

    protected $guarded = [];

    protected $casts = [
        'status' => 'boolean'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getAll()
    {
        return Cache::remember('all-categories', now()->addDay(), function () {
            return Category::select(['id', 'name', 'slug'])->get();
        });
    }
}
