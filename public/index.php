<?php

/**
 * Registering the autoloader
 *
 * Composer provides automatically-generated class loader for the
 * application so there's no need to manually include each of them
 */

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/routes.php';

$app = require_once __DIR__ . '/../app/bootstrap.php';
