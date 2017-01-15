<?php namespace Console;

interface Console {

    //成功后的执行操作
    public function success();

    //失败后执行操作
    public function error();

    //获取命令描述
    public function getDescription();

    //获取参数
    public function getParams();
}
