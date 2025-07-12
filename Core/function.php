<?php 
function dd($value){
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code) {
    if($code === 403){
        require base_path('views/403.view.php');
    }
    else if($code ===404){
        require base_path('views/404.view.php');
    }
    exit;
}


function base_path($path){
    return BASE_PATH. $path;
}

function view($path , $attributes = []){
    extract($attributes);
    require base_path('views/' . $path);
}