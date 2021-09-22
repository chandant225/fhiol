<?php

namespace App;

use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use SoftDeletes, HasSlug, Taggable;

    public const EXCERPT_LENGTH = 150;
    public const SEO_DESCRIPTION_LENGTH = 120;

    protected $guarded = ['id'];

    protected $casts = [
        'is_draft' => 'boolean',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeDraft($query)
    {
        return $query->where('is_draft', true);
    }

    public function isDraft()
    {
        return $this->is_draft;
    }

    public function scopePublished($query)
    {
        return $query->where('is_draft', false);
    }

    public function isPublished()
    {
        return $this->is_draft ? false : true;
    }

    public function imageUrl()
    {
        ray(Storage::url($this->cover_image));
        return Storage::url($this->cover_image);
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id')->withDefault();
    }
}
