<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function getTitle() {
        return $this->title;
    }

    public function user()
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
