<?php

if (!function_exists('izitools')) {
    /**
     * Return app instance of izitools.
     *
     * @return Jaghoub\izitools\iziier
     */
    function izitools() {
        return app('izitools');
    }
}
