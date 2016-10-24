<?php namespace Core;

class Plugin {

    protected $name;
    protected $class;

    public function __construct($name) {
        $this->name = $name;
        $className = '\\Plugin\\' . ucwords($this->name);
        $this->class =  new $className();
    }

    public function console($request) {
        $commond = $request[1];
        $params = [];
        for ($i = 2; isset($request[$i]); $i++) {
            $params[] = $request[$i];
        }
        $this->class->index($commond, $params);
    }
}
