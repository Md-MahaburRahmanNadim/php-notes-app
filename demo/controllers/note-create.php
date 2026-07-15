<?php
$heading = 'Create Note';
$config = include_once 'config.php';
$db =new Database($config['database']);
$query = "INSERT INTO notes (body,user_id) VALUES (:body,:user_id)";
if($_SERVER["REQUEST_METHOD"]==='POST'){
$body = $_POST['body'];
$db->query($query,['body'=>$body,'user_id'=>11]);
}


include './views/note-create.view.php';