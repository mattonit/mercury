<?php

use Core\Router;
use Core\Request;
use Core\Response;

define('EXT', '.php');
define('APP_PATH', realpath('../app'));

/**
 * Initialize the new Router instance
 */

$router = new Router;

$route = $router::match(Request::method(), Request::uri());

if(!$route) {
    echo "404";
}
