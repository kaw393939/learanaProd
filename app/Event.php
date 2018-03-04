<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class event extends Model
{

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
    public function attendees()
    {
        return $this->morphToMany(event::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }
}
