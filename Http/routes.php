<?php

//ROUTE
use \Core\Route;

Route::get('/', 'IndexDispatcher@index');

Route::get('/aa', function () {
    return 'aaaa';
});

Route::post('/lailailai/cdvfv', 'TestdController@index');
