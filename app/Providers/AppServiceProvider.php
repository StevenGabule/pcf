<?php

namespace App\Providers;

use App\Repositories\MenuComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('layouts.menu', MenuComposer::class);

        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
