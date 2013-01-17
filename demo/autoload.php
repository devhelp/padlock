<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$autoloader = new UniversalClassLoader();

$autoloader->registerNamespaceFallback(__DIR__.'/../src/');
$autoloader->register();