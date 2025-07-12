<?php 
namespace Core;

class Router{
    protected $routes = [];

    public function get($url , $controller){
        $this->routes[] = [
            'uri' => $url,
            'method' => 'GET',
            'controller' => $controller
        ];

    }
    public function post($url , $controller){
        $this->routes[] = [
            'uri' => $url,
            'method' => 'POST',
            'controller' => $controller
        ];
    }
    public function delete($url , $controller){
        $this->routes[] = [
            'uri' => $url,
            'method' => 'DELETE',
            'controller' => $controller
        ];
    }
    public function patch($url , $controller){
        $this->routes[] = [
            'uri' => $url,
            'method' => 'PATCH',
            'controller' => $controller
        ];
    }
    public function put($url , $controller){
        $this->routes[] = [
            'uri' => $url,
            'method' => 'PUT',
            'controller' => $controller
        ];
    }

    public function route($url , $method){
        foreach($this->routes as $route){
            if($route['uri'] === $url && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
            
        }
        $this->abort(404);
    }

    protected function abort($code){
        if($code === 403){
            require base_path('views/403.view.php');
        } else if($code === 404){
            require base_path('views/404.view.php');
        }
        exit();
    }
     
}






















// $routes = require base_path('routes.php');

// $url = parse_url($_SERVER['REQUEST_URI'])['path'];




// if (array_key_exists($url , $routes)){
//     require base_path($routes[$url]);
// }else{
//     http_response_code(404);

//     require 'views/404.view.php';

//     exit;
// }