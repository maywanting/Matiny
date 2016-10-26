<?php namespace Plugin;

class InfoPlugin extends Plugin{
    public static function new($argv) {
        $fileName = __APPDIR__ . '/source/' . $argv . '/' . $argv . '.info';
        $modelName = __APPDIR__ . '/Plugin/InfoPlugin/model.info';

        if (file_exists($fileName)) {
            echo $fileName. " is exist\n";
            return false;
        } else {
            file_put_contents($fileName, file_get_contents($modelName));  //default file can be setted;
            echo $fileName . " created\n";
            return true;
        }
    }
}
