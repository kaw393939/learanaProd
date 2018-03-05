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
        return $this->morphToMany(User::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function content()
    {
        return $this->morphedByMany(content::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->morphedByMany(Group::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }
}
