<?php
include_once 'functions.php';
// dd($_SERVER['REQUEST_URI']);
$fullUri = $_SERVER['REQUEST_URI'];
// to get only url (path) not the query parms
$uri = parse_url($fullUri)['path'];
// dd(parse_url($uri)['path']);

// if($uri === '/'){
//     require_once './controllers/index.php';
// }elseif($uri === '/about'){
//     require_once './controllers/about.php';
// }elseif($uri === '/contract'){
//     require_once './controllers/contract.php';
// }
$routes =[
    '/'=>'controllers/index.php',   
    '/about'=>'controllers/about.php',
    '/contract'=>'controllers/contract.php'
    ];

    // if(array_key_exists($key,$routes))
    if(array_key_exists($uri,$routes)){
        require_once $routes[$uri];
    }