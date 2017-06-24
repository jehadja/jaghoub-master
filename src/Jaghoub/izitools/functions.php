<?php

if (!function_exists('izitools')) {
    /**
     * Return app instance of izitools.
     *
     * @return jaghoub\izitools\iziier
     */
    function izitools() {
        return app('izitools');
    }
}
