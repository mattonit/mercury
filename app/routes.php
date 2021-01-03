<?php

use Core\Route;

Route::get('/', function() {
    echo "Home";
});

Route::post('/', function () {
    echo "Post";
});

Route::get('/about/', function() {
    echo "About Us";
});
