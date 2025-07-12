<?php
use Core\App;
use Core\Validator;
$db = App::container()->resolve('Core\Database');
$userId = 1;

$id = $_POST['id'] ?? null;
$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();
$heading = 'Edit Note';
// require 'function.php';


// Authorization check
$db->authorization($note['user_id'] === $userId);

//validiet the form 

$error = [];
$validator = new validator();
if ($validator->string($_POST['body'])) {
    $error['body'] = 'A body is required';
}

if (count($error)){
    return view('notes/edit.view.php', [
        'heading' => $heading,
        'errors' => $error ?? [],
        'note' => $note
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

header('Location: /notes');
die();


