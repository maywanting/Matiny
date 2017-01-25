<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function d($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
define('__APPDIR__', realpath(__DIR__));

require_once __APPDIR__ . '/Core/Autoload.php';

//autoload classfile
spl_autoload_register(array('\Core\AutoLoad', 'loadClassLoader'));

$request = new \Core\Request(); //分解request

require_once __APPDIR__ . '/Http/routes.php';

echo \Core\Route::dispatch($request);
