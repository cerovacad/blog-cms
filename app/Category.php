<?php

namespace App;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
