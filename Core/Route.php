<?php namespace Core;

use \Core\Request;

class Route {
    public static $GET = [];
    public static $POST = [];

    public static function __callstatic ($method, $params) {
        self::${strtoupper($method)}[$params[0]] = $params[1];
    }

    public static function dispatch(Request $request) {
        $method = strtoupper($request->getMethod());
        $uri = $request->getUri();

        $callback = self::${$method}[$uri];

        if (is_callable($callback)) {
            return call_user_func($callback);
        } else {
            $callbacks = explode('@', $callback);
            $className = '\\Http\\' . $callbacks[0];
            $class = new $className();
            return call_user_func_array([$class, $callbacks[1]], []);
        }
    }
}
