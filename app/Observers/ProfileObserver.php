<?php

namespace App\Observers;

use App\Profile;
use App\Notifications\UserWelcome;

class ProfileObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User $user
     * @return void
     */
    public function saved(Profile $profile)
    {
        $user = $profile->user;

        $user->notify(new UserWelcome());
        //$user->notify(new UserWelcome());
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}