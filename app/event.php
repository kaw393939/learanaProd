<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
class event extends Model
{
    use Taggable;

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
