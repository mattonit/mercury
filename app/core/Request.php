<?php

namespace Core;

class Request
{

    /**
     * Get the request method
     * @return mixed
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Determine the current uri
     * @return string
     */
    public static function uri(): string
    {

        $uri = $_SERVER['REQUEST_URI'];

        if (!$uri) {
            throw new \Error('Unable to determine the current uri');
        }

        $uri = parse_url($uri, PHP_URL_PATH);

        return $uri;
    }

}
