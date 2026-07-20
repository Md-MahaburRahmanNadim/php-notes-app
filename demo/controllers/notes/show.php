<?php

use Core\Database;

$config = include_once base_path('config.php');

$db = new Database($config['database']);
$courrentUser = 11;
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query("select * from notes where id =:id", [':id' => $id])->findOrFail();
    // dd($note);


    authorize($note['user_id'] === $courrentUser);
    $deleted = 'delete from notes where id =:id';
    $db->query($deleted, ['id' => $_POST['id']]);
    // redirect to notes page
    header("location: /notes");
    exit();
}

$note = $db->query("select * from notes where id =:id", [':id' => $id])->findOrFail();
// dd($note);


authorize($note['user_id'] === $courrentUser);

// if($note['user_id'] !== $courrentUser){
// abort(Response::FORBIDDEN);
// }


view('notes/show.view.php', ['heading' => 'My Notes', 'note' => $note]);
