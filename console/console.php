<?php namespace Console;

interface Console {
    public function success();
    public function error();
    public function describe();
}
