<?php

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'utils/helpers.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// require 'utils/helpers.php';
// require 'Database.php';
// require 'Response.php';
// require 'router.php';

// $config = require 'config.php';
// $id = $_GET['id'] ?? 1;
// $query = 'SELECT * FROM posts where id = ?';
// $posts = (new Database($config['database']))->query($query, [$id])->fetch();

// dd($posts);
// foreach ($posts as $post) {
//     echo "<h2>{$post['title']}</h2>";
//     echo "<p>{$post['created_at']}</p>";
// }