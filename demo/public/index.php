<?php
const BASE_PATH = __DIR__ . '/../';
// include_once base_path('functions.php');
include_once BASE_PATH . 'Core/' . 'functions.php';
include_once base_path('Core/' . 'Response.php');
spl_autoload_register(function ($class) {
    // include_once base_path('Database.php');
    /**
     * every class that is create a instance will be include by automatically (when we create(inisitated) a class)
     */
    include_once base_path('Core/' . $class . '.php');
});
include_once base_path('Core/' . 'router.php');
