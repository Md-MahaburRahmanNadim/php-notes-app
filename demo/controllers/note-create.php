<?php
$heading = 'Create Note';
include_once 'Validator.php';
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
    $errors = [];

    // if the body is empty then not send
    if (!Validator::string($_POST['body'])) {
        $errors['body'] = 'A body is not be zero and not be over 1000 is required';
    }
    if (empty($errors)) {
        $body = $_POST['body'];
        $db->query($query, ['body' => $body, 'user_id' => 11]);
    }
}
include './views/note-create.view.php';
