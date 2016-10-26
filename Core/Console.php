<?php namespace Core;

use \Core\Plugin;

class Console {

    private $command;
    private $params;
    private $class;

    public function __construct ($request) {
        $this->command = $request[1];
        $this->params = [];
        for ($i = 2; isset($request[$i]); $i++) {
            $this->params[] = $request[$i];
        }

        $className = '\\Console\\' . ucwords($this->command) . 'Console';
        $this->class = new $className($this->params);
    }

    public function cliHanddle() {
        $this->class->previous();

        foreach($this->class->getSupportPlugin() as $plugin) {
            Plugin::console($plugin, $this->command, $this->params);
        }

        $this->class->after();
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
