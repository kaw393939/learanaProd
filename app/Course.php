<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function getTitle() {
        return $this->title;
    }

    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function enrollment()
    {
        return $this->morphToMany(Course::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function resources()
    {
        return $this->belongsToMany('App\Resource', 'course_resources', 'course_id', 'resource_id')->withTimestamps();
    }

}
