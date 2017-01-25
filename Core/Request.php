<?php namespace Core;

class Request {
    /**
     * @description: 请求的uri
     */
    protected $uri;

    /**
     * @description: 请求的类型
     */
    protected $method;

    /**
     * @description: userAgent
     */
    protected $userAgent;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
    }

    public function getUri() {
        return $this->uri;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getUserAgent() {
        return $this->userAgent;
    }
}
