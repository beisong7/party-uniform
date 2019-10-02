<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'about_info',
        'about_title',
        'about_title2',
        'key1',
        'key2',
        'key3',
        'map',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'phone',
        'about_image',
    ];

    public function getAboutImg(){

        return !is_file($this->about_image)?url('pu/wrapa.jpg'):url($this->about_image);
    }
}
