<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupType extends Model
{
    public function group()
    {
        return $this->belongsToMany('App\Group');
    }
}
