<?php namespace Core;

class Console {

    private $commond;
    private $params;
    private $class;

    public function __construct ($commond) {
        $this->commond = $commond;
        $className = '\\Console\\' . ucwords($this->commond) . 'Console';
        $this->class = new $className($this->params);
    }

    public function cliHanddle($request) {
        $this->params = [];
        for ($i = 2; isset($request[$i]); $i++) {
            $this->params[] = $request[$i];
        }
    }

    public function getSupportPlugin() {
        return $this->class->getSupportPlugin();
    }

    public function success() {
    }

    public function error() {
    }

    public function getParams() {
        return $this->params;
    }
}
