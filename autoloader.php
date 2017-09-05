<?php

spl_autoload_register(function($class){
    $file = __DIR__.'/'.strtolower($class).'.php';
    if(!file_exists($file)){
        throw new Exception('Class not found');
    }
    require_once $file;
});