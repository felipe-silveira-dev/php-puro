<?php
require 'utils/helpers.php';
require 'Database.php';

$config = require 'config.php';

$posts = (new Database($config['database']))->query("SELECT * FROM posts");

foreach ($posts as $post) {
    echo "<h2>{$post['title']}</h2>";
    echo "<p>{$post['created_at']}</p>";
}

// require 'router.php';