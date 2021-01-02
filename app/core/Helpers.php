<?php

use Core\Env;

if (!function_exists('env')) {
    function env($key, $default = null): ?string
    {

        return Env::get($key) ?? $default;

    }
}
