<?php
include_once 'functions.php';
// dd($_SERVER['REQUEST_URI']);
$uri = $_SERVER['REQUEST_URI'];
if($uri === '/'){
    require_once './controllers/index.php';
}elseif($uri === '/about'){
    require_once './controllers/about.php';
}elseif($uri === '/contract'){
    require_once './controllers/contract.php';
}