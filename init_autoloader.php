<?php

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    $loader = include __DIR__ . '/vendor/autoload.php';
}

if (!$loader instanceof \Composer\Autoload\ClassLoader) {
    throw new \RuntimeException('Unable to load composer. Run `php composer.phar update`.');
}
