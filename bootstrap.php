<?php
use Core\App;
use Core\Database;
use Core\Container;

$contianer = new Container();

$contianer->bind('Core\Database', function () {
    $config = require base_path('config.php');
    return new Database($config);
}); 

$db = $contianer->resolve('Core\Database');

App::setContainer($contianer);