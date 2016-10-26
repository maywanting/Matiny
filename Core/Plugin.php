<?php namespace Core;

class Plugin {
    public static function console($class, $method, $params) {
        $class = '\\Plugin\\' . $class;
        call_user_func_array(array($class, $method), $params);
    }
}
