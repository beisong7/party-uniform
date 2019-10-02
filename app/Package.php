<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable =[
        'slug',
        'title',
        'info',
        'active',
        'image',
    ];
}
