<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        /*$this->app['validator']->extend('min_array_size', function($attribute, $value, $parameters) {

            $data = $value;

            if( ! is_array($data)){
                return true;
            }
            return count($data) >= $parameters[0];
});*/
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
