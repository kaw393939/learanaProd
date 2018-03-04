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
        'email', 'password'];

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
        return $this->hasMany('App\Course', 'user_id', 'id');
    }

    public function profile()
    {

        return $this->hasOne('App\profile', 'user_id', 'id');
    }

    public function role()
    {

        return $this->hasOne('App\systemRole', 'user_id', 'id');
    }

    public function groups()
    {
        return $this->hasMany('App\group', 'user_id', 'id');
    }

    public function events()
    {
        return $this->hasMany('App\event', 'user_id', 'id');
    }

    public function resources()
    {
        return $this->hasMany('App\Resource', 'user_id', 'id');
    }

    public function enrollments()
    {
        return $this->belongsToMany('App\courseEnrollment', 'course_enrollments', 'user_id', 'course_id')->withPivot('courseRole_id')->withTimestamps();
    }
    public function eventAttendance()
    {
        return $this->belongsToMany('App\eventAttendee', 'event_attendees', 'user_id', 'event_id')->withPivot('eventRole_id')->withTimestamps();
    }
    public function groupMemberships($groupID = NULL)
    {
        return $this->belongsToMany('App\groupMember', 'group_members', 'user_id', 'group_id')->withPivot('groupRole_id')->withTimestamps();
    }



    public function actions()
    {
        return $this->hasMany('App\Action', 'user_id', 'id');
    }

    public function mediaEvents()
    {
        return $this->hasMany('App\mediaEvent', 'user_id', 'id');
    }

    public function sections()
    {
        return $this->hasMany('App\Section');
    }
}
