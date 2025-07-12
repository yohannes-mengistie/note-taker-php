<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/function.php';
// require base_path('database.php');
// require base_path('response.php');


spl_autoload_register(function($class){
    $classPath = base_path(str_replace('\\', '/', $class) . '.php');
    if (file_exists($classPath)) {
        require $classPath;
    } else {
        throw new Error("Failed to autoload class: $class (expected at $classPath)");
    }
});

require base_path('bootstrap.php');

$router =new \Core\Router();


$routes = require base_path('routes.php');
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ??  $_SERVER['REQUEST_METHOD'];

$router -> route($url , $method);














// require base_path('Core/router.php');








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
