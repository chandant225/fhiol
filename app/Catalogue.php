<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Catalogue extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function fileUrl()
    {
        return Storage::url($this->file_path);
    }
}
