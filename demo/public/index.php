<?php
const BASE_PATH = __DIR__ . '/../';
// include_once base_path('functions.php');
include_once BASE_PATH . 'functions.php';
include_once base_path('Database.php');
include_once base_path('Response.php');

include_once base_path('router.php');
// var_dump(__DIR__ . '/../'); // its will start from demo (project root);

/**
 * we need to change our root directory (from ) project root to (public ) folder 
 * 
 * Because now we can access each and every file by edeting url. which is super bad
 * 
 * public folder only contain (index.php and js,css, assets) etc
 * 
 * php -S nadim:8888 -t public
 */
