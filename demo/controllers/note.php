<?php
$config = include_once 'config.php';

$db= new Database($config['database']);
$courrentUser = 11;
$heading = 'My Notes';
$id = $_GET['id'];

$note = $db->query("select * from notes where id =:id",[':id'=>$id])->findOrFail();
// dd($note);



authorize($note['user_id'] === $courrentUser);

// if($note['user_id'] !== $courrentUser){
    // abort(Response::FORBIDDEN);
// }


include_once './views/note.view.php';

