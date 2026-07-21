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
    // function routeToController($uri, $routes)
    // {
    //     if (array_key_exists($uri, $routes)) {

    //         require_once base_path($routes[$uri]);
    //     } else {

    //         abort();
    //     }
    // }
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require_once base_path($route['controller']);
            }
        }
        $this->abort();
    }
    public function abort($code = 404)
    {
        http_response_code($code);
        require_once base_path("views/{$code}.php");
        die();
    }
}
