<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function groupType()
    {

        return $this->hasOne('App\groupType', 'user_id', 'id');
    }
}
