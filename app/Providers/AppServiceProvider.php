<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB,File,Auth,App,Session,View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('configs',App\Config::get());
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
