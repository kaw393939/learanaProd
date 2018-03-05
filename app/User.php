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

    public function profile()
    {

        return $this->hasOne('App\Profile', 'user_id', 'id');
    }

    public function role()
    {

        return $this->hasOne('App\systemRole', 'user_id', 'id');
    }

    public function groups()
    {
        return $this->morphedByMany(Group::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function events()
    {
        return $this->morphedByMany(Event::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function courses()
    {
        return $this->morphedByMany(Course::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function content()
    {
        return $this->morphedByMany(Content::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }
}
