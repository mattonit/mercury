<?php

use Core\Route;

Route::get('/', function() {

    view('home', [
        'name' => env('APP_NAME')
    ]);
});

Route::post('/', function () {
    echo "Post";
});

Route::get('/about/', function() {
    echo "About Us";
});
