<?php

namespace Core;

class Router
{
    protected $routes = [];
    protected function add($uri, $controller, $method)
    {
        // $this->routes[] = [
        //     'uri' => $uri,
        //     'controller' => $controller,
        //     'method' => $method
        // ];
        $this->routes[] = compact('uri', 'controller', 'method');
        /**
         * compact is create a key with the name of variable and put the value with value of variable ('uri'=>$uri)
         * 
         */
    }
    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }
    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }
    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }
    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
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
