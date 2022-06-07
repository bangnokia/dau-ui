<?php

namespace BangNokia\DauUi;

use Illuminate\Support\Facades\Blade;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'd');
    }
}
