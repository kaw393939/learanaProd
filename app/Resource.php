<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
class Resource extends Model
{
    use Taggable;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function course()
    {
        return $this->belongsToMany('App\Course','course_resources', 'course_id', 'resource_id');
    }
}
