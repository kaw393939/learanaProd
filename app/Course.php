<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;

class Course extends Model
{
    //
    use Taggable;

    public function getTitle() {
        return $this->title;
    }

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
    public function sections()
    {
        return $this->hasMany('App\Section');
    }

    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
}
