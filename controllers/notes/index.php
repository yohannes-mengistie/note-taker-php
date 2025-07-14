<?php
use Core\App;
use Core\Database;
// $config = require base_path('config.php');
// $db = new Database($config);

$db = App::container()->resolve('Core\Database');
$user_id = $_SESSION['user']['id']; // Default to 1 if not logged in

$notes =$db -> query("SELECT * FROM notes where user_id = $user_id") -> get();
$heading = 'My Notes';
// require 'function.php';
view('notes/notes.view.php',[
    'heading' => $heading,
    'notes' => $notes
]);

