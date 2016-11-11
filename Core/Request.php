<?php namespace Core;

class Request {
    protected $uri;
    protected $type;
    protected $method;
    protected $

    public function __construct() {
        $this->server = $_SERVER;
        dd($_SERVER);
    }
}
