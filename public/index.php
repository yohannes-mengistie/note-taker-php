<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'function.php';
// require base_path('database.php');
// require base_path('response.php');
spl_autoload_register(function($class){
    require base_path("Core/" . $class . '.php');
});

require base_path('router.php');








// $id = $_GET['id'];
// var_dump($id);
// if ($id === null || !is_numeric($id)) {
//     die("Invalid ID");
// }

// // Use prepared statement (safe)
// $posts = $db->query("SELECT * FROM post WHERE id = :id", ['id' => $id]);



// dd($posts);

// foreach ($posts as $post) {
//     echo "<li> {$post["title"]} </li>";
// }
