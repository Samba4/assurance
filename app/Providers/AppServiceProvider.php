<?php

namespace app\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale(config('app.locale'));

        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role == 'admin';
        });

        Blade::if('adminOrOwner', function ($id) {
            return auth()->check() && (auth()->id() === $id || auth()->user()->role == 'admin');
        });
    }
}
