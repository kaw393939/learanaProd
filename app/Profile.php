<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
