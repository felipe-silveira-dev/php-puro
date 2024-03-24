<?php

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'utils/helpers.php';

spl_autoload_register(function ($class) {
    require base_path("Core/" . $class . '.php');
});

require base_path('Core/router.php');

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