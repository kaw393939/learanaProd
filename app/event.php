<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
class event extends Model
{
    use Taggable;

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
    public function attendees()
    {
        return $this->belongsToMany('App\eventAttendee', 'event_attendees', 'user_id', 'event_id')->withTimestamps();
    }
}
