<?php namespace Core;

class Autoload {

    public static function loadClassLoader($class) {
        $modelName = explode('\\', $class);
        call_user_func_array(array(__CLASS__, 'load' . $modelName[0] . 'Class'), array($class));
    }

    //core加载
    public static function loadCoreClass($class) {
        $path = explode('\\', $class);

        $realPath = '';
        foreach ($path as $value) {
            $realPath .= '/' . $value;
        }

        require_once __APPDIR__ . $realPath . '.php';
    }

    //console加载
    public static function loadConsoleClass($class) {
        $path = explode('\\', $class);

        $realPath = '';
        foreach ($path as $value) {
            $realPath .= '/' . $value;
        }

        require_once __APPDIR__ . $realPath . '.php';
    }

    //config加载
    public static function loadConfigClass($class) {
        $path = explode('\\', $class);

        $realPath = '';
        foreach ($path as $value) {
            $realPath .= '/' . $value;
        }

        require_once __APPDIR__ . $realPath . '.php';
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
}
