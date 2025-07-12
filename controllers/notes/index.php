<?php
use Core\App;
use Core\Database;
// $config = require base_path('config.php');
// $db = new Database($config);
$db = App::container()->resolve('Core\Database');



$notes =$db -> query("SELECT * FROM notes where user_id = 1") -> get();
$heading = 'My Notes';
// require 'function.php';
view('notes/notes.view.php',[
    'heading' => $heading,
    'notes' => $notes
]);

