<?php

use Core\Database;
use Core\Validator;

// include_once base_path('Validator.php');
$config = include_once base_path('config.php');
$db = new Database($config['database']);

$errors = [];

$query = "INSERT INTO notes (body,user_id) VALUES (:body,:user_id)";

// if the body is empty then not send
if (!Validator::string($_POST['body'])) {
    $errors['body'] = 'A body is not be zero and not be over 1000 is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', ['heading' => 'Create Note', 'errors' => $errors]);
}
$body = $_POST['body'];
$db->query($query, ['body' => $body, 'user_id' => 11]);

header('Location: \notes');
exit();
