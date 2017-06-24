<?php

namespace jaghoub\izitools;

use Illuminate\Support\ServiceProvider;

class izitoolsServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('izitools', function ($app) {
            return $this->app->make('jaghoub\izitools\iziier');
        });
    }
}
