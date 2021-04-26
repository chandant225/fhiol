<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasSlug;

    protected $guarded = ['id'];

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

    public function currentPrice()
    {
        return $this->hasDiscount()
            ? $this->sale_price
            : $this->price;
    }

    public function hasDiscount()
    {
        return $this->sale_price ? true : false;
    }

    public function discountPercentage($withSign = true)
    {
        $discountAmount = (int)$this->price - (int)$this->sale_price;
        $discountPercent = round(($discountAmount / $this->price) * 100);
        if ($withSign) {
            $discountPercent = $discountPercent . '%';
        }
        return $this->hasDiscount() ? $discountPercent : null;
    }

    public function isOnSale()
    {
        return $this->hasDiscount();
    }

    public function isMarkedNew()
    {
        return rand(0, 1);
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
}
