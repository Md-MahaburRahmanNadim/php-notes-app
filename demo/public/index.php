<?php
include_once 'functions.php';
include_once 'Database.php';
include_once 'Response.php';

include_once 'router.php';

/**
 * we need to change our root directory (from ) project root to (public ) folder 
 * 
 * Because now we can access each and every file by edeting url. which is super bad
 * 
 * public folder only contain (index.php and js,css, assets) etc
 * 
 * php -S nadim:8888 -t public
 */
