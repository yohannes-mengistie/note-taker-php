<?php 
$routes = require 'routes.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];




if (array_key_exists($url , $routes)){
    require $routes[$url];
}else{
    http_response_code(404);

    require 'views/404.view.php';

    exit;
}