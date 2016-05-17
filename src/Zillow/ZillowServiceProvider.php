<?php

namespace Zillow;

use Illuminate\Support\ServiceProvider;

class ZillowServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot() {}

    public function register()
    {        
        $this->app->bind('zillow', function ($app) {
            return new ZillowClient($app);
        });
        
        $this->app->alias('zillow', 'Zillow\ZillowClient');
    }
}
