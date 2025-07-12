<?php
use Core\App;
use Core\Database;

// $config = require base_path('config.php');
// $db = new Database($config);
$db = App::container()->resolve('Core\Database');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = 1;
    $id = $_POST['id'] ?? null;
    $note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();
    $db->authorization($note['user_id'] === $userId);
    
    $db -> query("DELETE FROM notes WHERE id = :id",['id' => $_POST['id']]);
    header('location: /notes');
    exit();
} 