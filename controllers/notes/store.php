<?php
use Core\App;
use Core\Database;
use Core\Validator;

// $config = require base_path('config.php');
// $db = new Database($config);

$db = App::container()->resolve('Core\Database');


$error = [];
$validator = new validator();
if ($validator->string($_POST['body'])) {
    $error['body'] = 'A body is required';
}

if (strlen($_POST['body']) > 1000) {
    $error['body'] = 'A body length of character should be less than 1000';
}

if(!empty($error)){
    view('notes/note-create.view.php',[
    'heading' => $heading,
    'errors' => $error ?? [],
]);
}

if (empty($error)) {
    $db->query("insert into notes(body,user_id) values(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => $_SESSION['user']['id']// hardcoded user id for now
    ]);

    header('Location: /notes'); 
    exit();
}
