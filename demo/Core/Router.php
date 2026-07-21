<?php

namespace Core;

class Router
{
    protected $routes = [];
    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }
    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }
    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }
    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }
    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }
}



// function abort($code = 404)
// {
//     http_response_code($code);
//     require_once base_path("views/{$code}.php");
//     die();
// }
// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {

//         require_once base_path($routes[$uri]);
//     } else {

//         abort();
//     }
// }
// $fullUri = $_SERVER['REQUEST_URI'];
// $uri = parse_url($fullUri)['path'];
// $routes = include_once base_path('routes.php');
// routeToController($uri, $routes);