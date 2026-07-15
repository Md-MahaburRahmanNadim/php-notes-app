<?php
$heading = 'My Notes';
$config = include_once 'config.php';

$db= new Database($config['database']);
$notes = $db->query("select * from notes where user_id = 11")->get();
// dd($notes);

include_once './views/notes.view.php';

