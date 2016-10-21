<?php namespace Core;

class Console {

    private $commond;
    private $params;
    private $class;

    public function __construct ($request) {
        if (isset($request[1])) {
            $this->commond = $request[1];

            $this->params = [];
            for ($i = 2; isset($request[$i]); $i++) {
                $this->params[] = $request[$i];
            }
        }
    }

    public function run() {
        $className = 'Console/' . $this->commond;
        $this->class = new $classname();
        return call_user_func(array($this->class, $this->params));
    }

    public function success() {
    }

    public function fail() {
    }

    public function __autoload($classname) {
        require_once __DIR__ . '/console/' . trim($classname) . '.php';
    }
}
?>
