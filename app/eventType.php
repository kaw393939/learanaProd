<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventType extends Model
{
    public function event()
    {
        return $this->belongsTo('App\event');
    }
}
