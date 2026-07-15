<?php
$config = include_once 'config.php';

$db= new Database($config['database']);

$heading = 'My Notes';
$id = $_GET['id'];
$note = $db->query("select * from notes where id =:id",[':id'=>$id])->fetch();
// dd($note);

include_once './views/note.view.php';

