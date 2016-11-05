<?php namespace Core;

class Request {
    protected $server;
    protected $type;

    public function __construct() {
        $this->server = $_SERVER;
        dd($_SERVER);
    }
}
