<?php
$config = include_once 'config.php';
$db =new Database($config['database']);
// dd('note create');
$heading = 'Create Note';

include './views/note-create.view.php';