<?php
$config = require base_path('config.php');
$db = new Database($config);

$id = $_GET['id'] ?? null;
$note =$db -> query("SELECT * FROM notes where id = :id", ['id' => $id]) -> findOrFail();
$heading = 'Note';
// require 'function.php';



$userId = 1;

$db->authorization($note['user_id'] === $userId);
view('notes/note.view.php',[
    'heading' => $heading,
    'note' => $note
]);

