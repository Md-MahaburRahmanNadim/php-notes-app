<?php
$heading = 'Create Note';
$config = include_once 'config.php';
$db = new Database($config['database']);
/**
 * in table plus we in history tag we can see how the data is inserted in a table. by inserting a data
 * 
 * from there we can write a insert query like below
 * 
 */

$query = "INSERT INTO notes (body,user_id) VALUES (:body,:user_id)";
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $body = $_POST['body'];
    $db->query($query, ['body' => $body, 'user_id' => 11]);
    $errors = [];
    // if the body is empty then not send
    if (strlen($_POST['body']) === 0) {

        $errors['body'] = 'A body is required';
    }
    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'the body cant be more then 1000 char';
    }
}

include './views/note-create.view.php';