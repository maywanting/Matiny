<?php namespace Core;

class Plugin {

    protected $name;
    protected $class;

    public function __construct($name) {
        $this->name = $name;
        $className = '\\Plugin\\' . ucwords($this->name);
        $this->class =  new $className();
    }

    public function console($commond) {
        $this->class->index($commond);
    }
}
