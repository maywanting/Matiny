<?php namespace Core;

class Route {
    protected static $routeMap;

    protected static function __callStatic($method, $params) {
        dd($params);
    }
}
