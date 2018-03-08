<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    public function members()
    {
        return $this->morphToMany(User::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function addOwner($user, $roleID = 1)
    {

        return $this->members()->attach($user, ['role_id' => $roleID]);
    }

    public function content()
    {
        return $this->morphedByMany(Content::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function events()
    {
        return $this->morphedByMany(Event::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->morphedByMany(Group::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }
}
