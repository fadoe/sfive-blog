<?php

namespace SfiveTest;

error_reporting(E_ALL | E_STRICT);
chdir(dirname(__DIR__));

class Bootstrap
{

    public static function init()
    {
        static::initAutoloader();
    }

    protected static function initAutoloader()
    {
        require __DIR__ . '/../src/vendor/autoload.php';
    }

}

Bootstrap::init();
