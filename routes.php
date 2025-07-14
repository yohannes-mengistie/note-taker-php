<?php
// return 
//  [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/note/create' => 'controllers/notes/note-create.php',
//     '/contact' => 'controllers/contact.php'
// ];

$router -> get('/', 'controllers/index.php');
$router -> get('/about', 'controllers/about.php');
$router -> get('/contact', 'controllers/contact.php');

$router -> get('/notes', 'controllers/notes/index.php' ,'auth');
$router -> get('/note', 'controllers/notes/show.php');
$router -> delete('/note', 'controllers/notes/destroy.php');
$router -> get('/note/create', 'controllers/notes/note-create.php');
$router -> post('/notes', 'controllers/notes/store.php');
$router -> get('/note/edit', 'controllers/notes/edit.php');
$router -> patch('/note', 'controllers/notes/update.php');

$router -> get('/register', 'controllers/registration/create.php','guest');
$router -> post('/register', 'controllers/registration/store.php','guest');

$router -> get('/login', 'controllers/session/create.php','guest');
$router -> post('/session', 'controllers/session/store.php','guest');
$router -> delete('/session', 'controllers/session/destroy.php','auth');








