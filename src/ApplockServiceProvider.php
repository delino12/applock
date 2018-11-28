<?php

namespace Delino\Applock;

use Illuminate\Support\ServiceProvider;

class ApplockServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->bind('delino-applock', function (){
            return new Applock();
        });
        $this->loadViewsFrom(__DIR__.'/views', 'applock');
    }
}
