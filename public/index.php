<?php

require_once '../vendor/SplClassLoader.php';

$classLoader = new SplClassLoader('SON','../vendor');
$classLoader->register();

$classLoader = new SplClassLoader('App','../');
$classLoader->register();

$bootstrap = new \App\Init;