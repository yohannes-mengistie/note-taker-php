<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function get($url, $controller, $middleware = null)
    {
        return $this->routes[] = [
            'uri' => $url,
            'method' => 'GET',
            'controller' => $controller,
            'middleware' => $middleware
        ];

        return $this;
    }
    public function post($url, $controller, $middleware = null)
    {
        return $this->routes[] = [
            'uri' => $url,
            'method' => 'POST',
            'controller' => $controller,
            'middleware' => $middleware
        ];
    }
    public function delete($url, $controller, $middleware = null)
    {
        return  $this->routes[] = [
            'uri' => $url,
            'method' => 'DELETE',
            'controller' => $controller,
            'middleware' => $middleware
        ];
    }
    public function patch($url, $controller, $middleware = null)
    {
        return $this->routes[] = [
            'uri' => $url,
            'method' => 'PATCH',
            'controller' => $controller,
            'middleware' => $middleware
        ];
    }
    public function put($url, $controller, $middleware = null)
    {
        return $this->routes[] = [
            'uri' => $url,
            'method' => 'PUT',
            'controller' => $controller,
            'middleware' => $middleware
        ];
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this; // optional: supports further chaining
    }


    protected function applyMiddleware(string $middlewareKey)
    {
        $middlewareClass = Middleware::resolve($middlewareKey);

        if (!$middlewareClass) {
            throw new \Exception("Middleware '{$middlewareKey}' not found in map.");
        }

        (new $middlewareClass)->handle(); // Now this works
    }





    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $url && $route['method'] === strtoupper($method)) {

                if (isset($route['middleware'])) {
                    $this->applyMiddleware($route['middleware']);
                }

                return require base_path($route['controller']);
            }
        }

        $this->abort(404);
    }

    protected function abort($code)
    {
        if ($code === 403) {
            require base_path('views/403.view.php');
        } else if ($code === 404) {
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