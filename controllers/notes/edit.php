<?php
// use Core\Database;

// $config = require base_path('config.php');
// require base_path('Core/Validator.php');
// $db = new Database($config);

use Core\App;
use Core\Validator;

$db = App::container()->resolve('Core\Database');


$id = $_GET['id'] ?? null;
$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();
$heading = 'Note';
// require 'function.php';



$userId = 1;

$db->authorization($note['user_id'] === $userId);
$heading = 'Edit Note';


view('notes/edit.view.php',[
    'heading' => $heading,
    'errors' => $error ?? [],
    'note' => $note
]);