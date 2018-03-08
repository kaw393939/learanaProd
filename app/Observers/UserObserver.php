<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User $user
     * @return void
     */
    public function saved(User $user)
    {

    }


    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User $user
     * @return void
     */

}