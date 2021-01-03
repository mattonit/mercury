<?php

use Core\Router;
use Core\Request;

define('EXT', '.php');
define('BASE_PATH', realpath('../'));
define('APP_PATH', BASE_PATH . '/app');
define('TEMPLATE_PATH', APP_PATH . '/templates');

/**
 * Initialize the new Router instance
 */

$router = new Router;

$route = $router::match(Request::method(), Request::uri());

if (!$route) {
    return view('errors/404');
}
