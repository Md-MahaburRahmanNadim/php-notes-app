<?php


const BASE_PATH = __DIR__ . '/../';
// include_once base_path('functions.php');
include_once BASE_PATH . 'Core/' . 'functions.php';
include_once base_path('Core/' . 'Response.php');
spl_autoload_register(function ($class) {
    // dd($class); Core\Database to Core/Database
    $class = str_replace('\\', '/', $class);
    include_once base_path($class . '.php');
});
include_once base_path('Core/' . 'Router.php');
$router = new \Core\Router;

$fullUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($fullUri)['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
// $routes = include_once base_path('routes.php');
include_once base_path('routes.php');
// routeToController($uri, $routes);
$router->route($uri, $method);
