<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventAttendee extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function eventRole() {

        return $this->hasOne('App\eventRole','eventRole_id', 'id');
    }
}
