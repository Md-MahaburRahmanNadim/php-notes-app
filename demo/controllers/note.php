<?php
$config = include_once 'config.php';

$db= new Database($config['database']);
$courrentUser = 11;
$heading = 'My Notes';
$id = $_GET['id'];
/**
 * 
 * what if we can use a method fetchOrAbort or findOrFail 
 * now we use PDOStatement method which are we dont won. 
 * 
 * if we return the instance on the query method then we can use that instance and we call any method on that instance ( Database ) class
 */

$note = $db->query("select * from notes where id =:id",[':id'=>$id])->findOrFail();
// dd($note);


/**
 * what if we have authorize($conditon) method that we can use throught out the applicatin
 * 
 */

authorize($note['user_id'] === $courrentUser);

// if($note['user_id'] !== $courrentUser){
    // abort(Response::FORBIDDEN);
// }


include_once './views/note.view.php';

