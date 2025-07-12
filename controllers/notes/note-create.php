<?php
// use Core\Database;

// $config = require base_path('config.php');
// require base_path('Core/Validator.php');
// $db = new Database($config);
$heading = 'Create Note';
view('notes/note-create.view.php',[
    'heading' => $heading,
    'errors' => $error ?? [],
]);