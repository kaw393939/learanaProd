<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseEnrollment extends Model
{
    public function owner()
    {
        return $this->belongsToMany('App\User')->withDefault();
    }

    public function course()
    {
        return $this->belongsTo('App\Course')->withDefault();

    }

    public function role()
    {
        return $this->hasOne('App\CourseRole');
    }
}
