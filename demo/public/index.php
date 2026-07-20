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
include_once base_path('Core/' . 'router.php');
