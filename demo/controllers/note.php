<?php
$config = include_once 'config.php';

$db= new Database($config['database']);
$courrentUser = 11;
$heading = 'My Notes';
$id = $_GET['id'];
$note = $db->query("select * from notes where id =:id",[':id'=>$id])->fetch();
// dd($note);
// if the note data not found in db the show 404 not found page
if(!$note){
    abort();
}

// if data found in db but the user is not authorize then show 403 unauthorized page

if($note['user_id'] !== $courrentUser){
    abort(403);
}


include_once './views/note.view.php';

