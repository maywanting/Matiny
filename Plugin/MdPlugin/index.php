<?php namespace Plugin;

class MdPlugin extends Plugin{

    //new 命令
    public static function new($avg) {
        $fileName = __APPDIR__ . '/source/' . $avg . '/' . $avg . '.md';

        if (file_exists($fileName)) {
            echo $fileName. " is exist\n";
            return false;
        } else {
            file_put_contents($fileName, '');  //default file can be setted;
            echo $fileName . " created\n";
            return true;
        }
    }

    //construct 命令
    public static function construct() {
        dd("fuck");
    }
}
