<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Category extends Model
{
    use HasSlug, SoftDeletes;

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

    public function imageUrl()
    {
        return asset('storage/' . $this->image);
    }

    public function hasParent()
    {
        return $this->parent_id ? true : false;
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('name');
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
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
