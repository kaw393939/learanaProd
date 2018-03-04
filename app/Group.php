<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\User');
    }
    public function members()
    {
        return $this->morphToMany(group::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }
    public function groupType()
    {

        return $this->hasOne('App\groupType', 'user_id', 'id');
    }
}
