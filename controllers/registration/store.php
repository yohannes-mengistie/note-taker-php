<?php
use Core\Validator;
use Core\App;

// ini_set('error_log', '/home/yohannes/Documents/kuraz-tech/php/logs/debug.log');
error_log("Starting store.php execution");
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
    error_log("Session started in store.php");
} else {
    error_log("Session already active in store.php");
}
ob_start();

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
error_log("Raw POST data: " . print_r($_POST, true));
error_log("Password length: " . strlen($password));

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
    view('registration/create.view.php', [
        'errors' => $errors,
    ]);
    exit();
}

$db = App::container()->resolve('Core\Database');
error_log("Database connection established");

try {
    $user = $db->query('select * from users where email = :email', [
        'email' => $email
    ])->find();
    error_log("User query result: " . print_r($user, true));

    if ($user !== null && !empty($user)) {
        error_log("User exists, redirecting to /");
        login($user);
        session_write_close();
        header('Location: /');
        exit();
    } else {
        error_log("No user found, proceeding to register");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        error_log("Hashed password: " . $hashedPassword);
        $db->query('insert into users(email, password) values(:email, :password)', [
            'email' => $email,
            'password' => $hashedPassword
        ]);
        // $userId = $db->lastInsertId();
        // error_log("User inserted into database with ID: $userId");

        login($user);
        error_log("Session set: " . print_r($_SESSION['user'], true));
        session_write_close();
        header('Location: /');
        exit();
    }
} catch (Exception $e) {
    error_log("Database error: " . $e->getMessage());
    $errors['db'] = 'An error occurred while processing your request.';
    view('registration/create.view.php', [
        'errors' => $errors,
    ]);
    exit();
}