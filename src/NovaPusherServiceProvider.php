<?php

namespace Zareismail\Tools;

use Illuminate\Contracts\Support\DeferrableProvider; 
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova; 

class NovaPusherServiceProvider extends ServiceProvider implements DeferrableProvider
{ 
    /**
     * Register any nova services.
     *
     * @return void
     */
    public function register()
    {
        Nova::tools([
            NovaPusher::make(),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
        ];
    }

    /**
     * Get the events that trigger this service provider to register.
     *
     * @return array
     */
    public function when()
    {
        return [
            ServingNova::class,
        ];
    }
}
