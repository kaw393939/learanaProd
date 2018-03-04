<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function enrollment()
    {
        return $this->morphToMany(User::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function resources()
    {
        return $this->morphedByMany(Resource::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

}
