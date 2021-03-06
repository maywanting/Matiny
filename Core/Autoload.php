<?php namespace Core;

class Autoload {

    public static function loadClassLoader($class) {
        $modelName = explode('\\', $class);
        call_user_func_array(array(__CLASS__, 'load' . $modelName[0] . 'Class'), array($class));
    }

    //plugin加载
    public static function loadPluginClass($class) {
        $path = explode('\\', $class);

        $realPath = '';
        foreach ($path as $value) {
            $realPath .= '/' . $value;
        }

        $fileName = __APPDIR__ . $realPath;
        if (file_exists($fileName . '.php')) {
            require_once __APPDIR__ . $realPath . '.php';
        } else {
            require_once __APPDIR__ . $realPath . '/index.php';
        }
    }

    public static function __callStatic($name, $arguments) {
        $path = explode('\\', $arguments[0]);

        $realPath = '';
        foreach ($path as $value) {
            $realPath .= '/' . $value;
        }

        require_once __APPDIR__ . $realPath . '.php';
    }
}
