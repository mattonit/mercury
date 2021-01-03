<?php

use Core\Env;
use Core\View;

if (!function_exists('env')) {
    function env($key, $default = null): ?string
    {

        return Env::get($key) ?? $default;

    }
}

if (!function_exists('view')) {
    function view($template, $data = [])
    {

        View::render($template, $data);

    }
}
