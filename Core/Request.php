<?php namespace Core;

class Request {
    /**
     * @description: 请求的uri
     */
    protected $uri;

    /**
     * @description: 请求的类型
     */
    protected $type;

    /**
     * @description: userAgent
     */
    protected $userAgent;

    public function __construct() {
        $this->type = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
    }
}
