<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductInquiry extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function markViewed()
    {
        $this->update(['read_at' => now()]);
        return $this;
    }

    public function viewed()
    {
        return $this->read_at ? true : false;
    }

    public function product()
    {
        return $this->belongsTo(Product::class)->withDefault();
    }
}
