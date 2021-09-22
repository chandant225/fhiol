<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes, HasSlug;

    protected $guarded = ['id'];

    protected $casts = [
        'status' => 'boolean',
        // 'specifications' => 'array', // not used
        'is_new' => 'boolean',
        'featured' => 'boolean',
        'features' => 'array',
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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->whereStatus(true);
    }

    public function isActive()
    {
        return $this->status;
    }

    public function youtubeUrl()
    {
        if ($this->video_url) {
            try {
                parse_str(parse_url($this->video_url, PHP_URL_QUERY), $arrayOfVars);
                return 'https://youtube.com/embed/' . $arrayOfVars['v'];
            } catch (\Exception $ex) {
                logger('Video ID not found in URL.', ['video_url' => $this->video_url, 'model' => $this]);
                return null;
            }
        }
        return null;
    }

    public function seoTitle()
    {
        return $this->title;
    }

    public function seoDescription()
    {
        return $this->description ? Str::substr(strip_tags($this->description), 0, 200) : null;
    }

    public function seoImage()
    {
        if (!$this->featuredImage) {
            return null;
        }

        return $this->featuredImage->imageUrl();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function featuredImage()
    {
        return $this->hasOne(ProductImage::class)->featured();
    }

    public function metas()
    {
        return $this->hasMany(ProductMeta::class);
    }

    public function syncSpecifications($specifications)
    {
        // Delete old meta keys
        $this->metas()->delete();

        // Insert new records
        $productMetas = collect();
        for ($index = 0; $index < count($specifications['key']); $index++) {

            $key = $specifications['key'][$index];
            $value = $specifications['value'][$index];

            if ($key != null && $value != null) {
                $productMetas->push(new ProductMeta([
                    'type' => 'specification',
                    'key' => $key,
                    'value' => $value,
                ]));
            }
        }
        return $this->metas()->saveMany($productMetas);
    }

    public function specifications()
    {
        return $this->metas()->where('type', 'specification')->get();
    }

    public function downloads()
    {
        return $this->morphMany(Download::class, 'downloadable');
    }
}
