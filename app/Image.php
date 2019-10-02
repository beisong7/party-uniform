<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url',
        'name',
    ];

    public function pic(){
        return url($this->url);
    }
}
