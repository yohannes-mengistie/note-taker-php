<?php

use Core\Validator;
use Core\App;



$db = App::container()->resolve('Core\Database');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';



$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Email must be a valid email address.';
    error_log("Validation error: Invalid email");
}

if (empty($password) || !is_string($password)) {
    $errors['password'] = 'Password is required.';
    error_log("Validation error: Password empty or not a string");
}

if (!empty($errors)) {
    error_log("Validation errors: " . print_r($errors, true));
    view('session/create.view.php', [
        'errors' => $errors,
    ]);
    exit();
}

$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

//dd($user);

if ($user) {
    //we have a user but we don no know the password is much with what we have on the database
if (password_verify($password, $user['password'])) {

    login([
        'email' => $email,
        'id' => $user['id']
    ]);

    header('Location: /');
    exit();
}
}

return view('session/create.view.php', [
        'errors' => [
            'password' => 'No maching account found with that email address and password.'
        ]
    ]);
    exit();