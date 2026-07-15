<?php
// dd($_SERVER['REQUEST_URI']);
$fullUri = $_SERVER['REQUEST_URI'];
// to get only url (path) not the query parms
$uri = parse_url($fullUri)['path'];
$routes = include_once 'routes.php';
function abort($code=404 ){
    http_response_code($code);
    require_once "views/{$code}.php";
    die();
}
function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){

        require_once $routes[$uri];

    }else{

        abort();

    }

}
routeToController($uri,$routes);