<?php

use Core\Database;

$config = include_once base_path('config.php');

$db = new Database($config['database']);
$courrentUser = 11;
$id = $_POST['id'];
$note = $db->query("select * from notes where id =:id", [':id' => $id])->findOrFail();
// dd($note);


authorize($note['user_id'] === $courrentUser);
$deleted = 'delete from notes where id =:id';
$db->query($deleted, ['id' => $id]);
// redirect to notes page
header("location: /notes");
exit();
