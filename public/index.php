<?php

/**
 * Registering the autoloader
 *
 * Composer provides automatically-generated class loader for the
 * application so there's no need to manually include each of them
 */

require __DIR__ . '/../vendor/autoload.php';

use System\Route;

Route::get('/', function() {
    echo "Hello, Mercury!";
});
