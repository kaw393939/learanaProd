<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';

    //
    public function users()
    {
        return $this->morphToMany(User::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->morphToMany(Group::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function events()
    {
        return $this->morphToMany(Event::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function courses()
    {
        return $this->morphToMany(Course::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();

    }
}
