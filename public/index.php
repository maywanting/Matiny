<?php
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
define('__APPDIR__', __DIR__);

require_once __APPDIR__ . '/Core/Autoload.php';

//autoload classfile
spl_autoload_register(array('\\Core\\AutoLoad', 'loadClassLoader'));

dd("ccc");
$console = new \Core\Console($argv);
$request = new \Core\Request();
dd($request);
