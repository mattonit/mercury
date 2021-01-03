<?php

namespace Core;

class Router
{

    public static $routes = [];

    /**
     * Method to add a new route to the collection
     * @param $method
     * @param $pattern
     * @param $action
     * @return array
     */
    public static function addRoute($method, $pattern, $action = null): array
    {
        static::$routes[$method . ' ' . $pattern] = $action;

        return static::$routes;
    }

    public static function match($method, $uri)
    {

        $route_found = 0;

        foreach (static::$routes as $keys => $callback) {

            if (preg_match('#^' . $method . ' ' . $uri . '\/?$#', $keys, $matches, PREG_OFFSET_CAPTURE)) {

                $matches = array_slice($matches, 1);

                if(is_callable($callback)) {
                    call_user_func($callback);
                }

                ++$route_found;

            }

        }

        return (bool)$route_found;
    }

}
