<?php

spl_autoload_register([new LibraryLoader, 'loadClass'] );
spl_autoload_register([new ApplicationLoader, 'loadClass'] );

class LibraryLoader
{
    public static function loadClass($class) {
        if (file_exists("{$class}.php")) {
            require_once "{$class}.php";
            return true;
        }
    }
}

class ApplicationLoader
{
    public static function loadClass($class) {
        if (file_exists("{$class}.php")) {
            require_once "{$class}.php";
            return true;
        }
    }
}

var_dump( new Pessoa);