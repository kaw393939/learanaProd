<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Profile;
use App\Observers\ProfileObserver;
use App\User;
use App\Observers\UserObserver;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Profile::observe(ProfileObserver::class);
        User::observe(UserObserver::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
