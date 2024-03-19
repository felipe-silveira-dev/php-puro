<?php

$routes = require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require "controllers/{$routes[$uri]}.php";
    } else {
        abort(404);
    }
}


routeToController($uri, $routes);