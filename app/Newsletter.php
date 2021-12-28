<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newsletter extends Model
{
    use SoftDeletes;
    protected $guarded=['id'];

    function canSend(){
        return Date('Y-m-d')>=$this->send_date;
    }
}
