<?php
$config = require base_path('config.php');
require base_path('Core/Validator.php');
$db = new Database($config);
$heading = 'Create Note';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $error = [];
    $validator = new validator();
    if($validator -> string($_POST['body'])){
        $error['body'] = 'A body is required';
    }

    if(strlen($_POST['body']) > 1000){
        $error['body'] = 'A body length of character should be less than 1000';
    }

    if(empty($error)){
        $db -> query("insert into notes(body,user_id) values(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 1 // hardcoded user id for now
    ]);
    }
}


view('notes/note-create.view.php',[
    'heading' => $heading,
    'errors' => $error ?? [],
]);