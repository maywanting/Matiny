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

        $parsedown = new \Parsedown();
        file_put_contents($htmlName, "<html>\n<head>\n<meta charset='UTF-8'/>\n</head><body>");
        file_put_contents($htmlName, $parsedown->text($markdown), FILE_APPEND);
        file_put_contents($htmlName, "</body></html>", FILE_APPEND);
    }
}
