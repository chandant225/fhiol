<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    protected $guarded = [];

    public function markViewed()
    {
        $this->update(['read_at' => now()]);
        return $this;
    }

    public function viewed()
    {
        return $this->read_at ? true : false;
    }
}
