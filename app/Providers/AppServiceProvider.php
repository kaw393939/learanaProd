<?php

namespace App\Providers;

use App\Profile;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\Observers\ProfileObserver;

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
