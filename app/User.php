<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany('App\Course','user_id','id');
    }
    public function enrollments($courseID = NULL)
    {
        return $this->hasMany('App\courseEnrollment','user_id','id');
    }
    public function groups()
    {
        return $this->hasMany('App\Group','user_id','id');
    }
    public function groupMemberships($groupID = NULL)
    {
        return $this->hasMany('App\groupMembership','user_id','id');
    }
    public function events()
    {
        return $this->hasMany('App\Event','user_id','id');
    }
    public function eventAttendance($eventID = NULL)
    {
        return $this->hasMany('App\groupMembership','user_id','id');
    }

    public function actions()
    {
        return $this->hasMany('App\Action','user_id','id');
    }
    public function mediaEvents()
    {
        return $this->hasMany('App\mediaEvent','user_id','id');
    }
    public function profile() {

        return $this->hasOne('App\profile','user_id', 'id');
    }
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
    public function sections()
    {
        return $this->hasMany('App\Section');
    }
}
