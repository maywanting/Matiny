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

$response = new \Core\Response($request->getController()); //从路由表中获取对应的函数和方法

$response->send(); //调用Plugin中的对应方法然后组装theme获取web请求并返回给客户端
