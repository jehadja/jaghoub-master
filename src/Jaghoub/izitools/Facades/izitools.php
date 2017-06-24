<?php

namespace jaghoub\izitools\Facades;

use Illuminate\Support\Facades\Facade;

class izitools extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'izitools';
    }
}
