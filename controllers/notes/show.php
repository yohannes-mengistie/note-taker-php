<?php
use Core\App;
// use Core\Database;

// $config = require base_path('config.php');
// $db = new Database($config);

$db = App::container()->resolve('Core\Database');
$userId = $_SESSION['user']['id'] ?? null;

$id = $_GET['id'] ?? null;
$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();
$heading = 'Note';
// require 'function.php';





$db->authorization($note['user_id'] === $userId);
view('notes/note.view.php', [
    'heading' => $heading,
    'note' => $note
]);
