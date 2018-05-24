<?php

namespace App;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
