<?php

//ROUTE
use \Core\Route;

Route::get('/', 'IndexController@index');

Route::get('/aa', function () {
    return 'aaaa';
});

Route::post('/lailailai/cdvfv', 'TestdController@index');
