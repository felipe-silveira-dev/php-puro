<?php

use Core\Response;

function dd($value): void
{
    echo '<pre>';
        var_dump($value);
    echo '</pre>';
    
    die();
}

function urlIs($url): bool
{
    return $_SERVER["REQUEST_URI"] === $url;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN): bool
{
    if (! $condition) {
        abort($status);
    }

    return true;
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = []): void
{
    extract($attributes);

    require base_path('views/' . $path);
}