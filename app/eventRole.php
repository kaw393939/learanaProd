<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventRole extends Model
{
    public function event()
    {
        return $this->belongsTo('App\eventAttendee');
    }
}
