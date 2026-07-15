<?php
$heading = 'Create Note';
$config = include_once 'config.php';
$db =new Database($config['database']);

if($_SERVER["REQUEST_METHOD"]==='POST'){
}


include './views/note-create.view.php';