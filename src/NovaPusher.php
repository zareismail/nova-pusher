<?php

namespace Zareismail\Tools;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaPusher extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('zareismil-nova-pusher', __DIR__.'/../dist/js/tool.js');
        Nova::style('zareismil-nova-pusher', __DIR__.'/../dist/css/tool.css');

        Nova::provideToScript([
            'pusher' => config('broadcasting.connections.pusher')
        ]);
    } 
}
