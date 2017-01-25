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
            dd(call_user_func($callback));
        } else {
            dd('bb');
        }
    }
}
