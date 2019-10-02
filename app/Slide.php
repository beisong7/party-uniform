<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'url',
        'title', 'info', 'active', 'image', 'btn_text',
    ];

    public function image(){
        return is_file($this->image)?url($this->image):url('images/default.png');
    }
}
