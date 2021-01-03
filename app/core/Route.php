<?php

namespace Core;

use Core\Router;

class Route
{

    /**
     * @param $pattern
     * @param $fn
     * @return string
     */
    public static function get($pattern, $fn)
    {

        Router::addRoute('GET', $pattern, $fn);
    }

    public static function post($pattern, $fn)
    {

        Router::addRoute('POST', $pattern, $fn);
    }

    public static function redirect($url): void
    {
        header("Location: $url");
    }
}
