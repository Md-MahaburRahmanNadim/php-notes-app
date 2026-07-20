<?php

use Core\Database;

$config = include_once base_path('config.php');


$db = new Database($config['database']);
$notes = $db->query("select * from notes where user_id = 11")->get();
// dd($notes);

view('notes/index.view.php', ['db' => $db, 'notes' => $notes, 'heading' => 'My Notes', 'config' => $config]);
