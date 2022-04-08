<?php

namespace Test\Listing\Providers;

use Illuminate\Support\ServiceProvider;


class itemsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        dd('we are loading our package service provider.');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
