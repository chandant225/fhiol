<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $guarded = [];

    public function scopePositioned($query)
    {
        return $query->orderByRaw('position IS NULL')->orderBy('position');
    }

    public function photoUrl()
    {
        return $this->photo
            ? Storage::url($this->photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=fff&background=1e94a1';
    }

    static function getNextPosition()
        {
            return Testimonial::max('position') + 1;
        }
}
