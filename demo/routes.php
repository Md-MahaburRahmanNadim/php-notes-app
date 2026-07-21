<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes/index.php',
//     /**
//      * /notes its use to view all notes a particuler user
//      */
//     '/note' => 'controllers/notes/show.php',
//     /**
//      * /note/:note or /note = to see a specific id note
//      */
//     '/note/create' => 'controllers/notes/create.php',
//     '/contract' => 'controllers/contract.php'
// ];
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
dd($router->routes);
