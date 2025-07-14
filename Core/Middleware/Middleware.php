<?php

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'auth' => \Core\Middleware\Auth::class,
        'guest' => \Core\Middleware\Guest::class,
    ];

    public static function resolve($key)
    {
        if (!$key) return null;

        return static::MAP[$key] ?? null;
    }
}
