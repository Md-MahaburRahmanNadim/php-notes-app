<?php

use Core\Database;

$config = include_once base_path('config.php');

$db = new Database($config['database']);
$courrentUser = 11;
$id = $_GET['id'];

$note = $db->query("select * from notes where id =:id", [':id' => $id])->findOrFail();
// dd($note);



authorize($note['user_id'] === $courrentUser);

// if($note['user_id'] !== $courrentUser){
// abort(Response::FORBIDDEN);
// }


view('notes/show.view.php', ['heading' => 'My Notes', 'note' => $note]);
