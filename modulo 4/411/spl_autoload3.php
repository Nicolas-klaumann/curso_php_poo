<?php

$al = new ApplicationLoader;
$al->register();

class ApplicationLoader
{
    public function register() {
        spl_autoload_register([$this, 'loadClass']);
    }
    public static function loadClass($class) {
        if (file_exists("{$class}.php")) {
            require_once "{$class}.php";
            return true;
        }
    }
}