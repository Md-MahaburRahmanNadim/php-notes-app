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
/**
 * Magic number.
 * 
 *  If some number we put the it not clear the meaning then we can wrap those into a variable of class constant. so that it provide clearity to the programer.
 * 
 */
// $forbidden = 403; it ok but we need to use this in may different file thats why it good option to create a file with a Response class. 


if($note['user_id'] !== $courrentUser){
    abort(Response::FORBIDDEN);
}


include_once './views/note.view.php';

