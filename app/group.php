<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use Cviebrock\EloquentTaggable\Taggable;

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
