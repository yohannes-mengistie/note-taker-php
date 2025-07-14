<?php

namespace Core\Middleware;

class Guest{
    public function handle()
    {
        if (isset($_SESSION['user'])) {
            header('Location: /'); // Redirect to home or another page
            exit();
        }
    }
}