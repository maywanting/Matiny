<?php namespace Core;

class Request {
    protected $uri;
    protected $type;
    protected $method;

    public function __construct() {
        dd($_SERVER);
        $this->type = $_SERVER['REQUEST_METHOD'];
        $this->
    }
}
