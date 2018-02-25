<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseRole extends Model
{
    public function course()
    {
        return $this->belongsTo('App\courseEnrollment');
    }

}
