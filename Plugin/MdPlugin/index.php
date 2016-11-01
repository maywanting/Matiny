<?php namespace Plugin;

require_once __APPDIR__ . '/Extension/Parsedown.php';

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
        $fileName = __APPDIR__ . '/source/test/test.md';
        $htmlName = __APPDIR__ . '/source/test/test.html';

        $markdown = file_get_contents($fileName);
        $markdown = explode("\n", $markdown);

        $parsedown = new \Parsedown();
        $html = [];
        foreach ($markdown as $value) {
            echo $parsedown->text($value);
        }
    }
}
