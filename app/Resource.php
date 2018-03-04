<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
class Resource extends Model
{
    public function users()
    {
        return $this->morphToMany(Resource::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }
}
