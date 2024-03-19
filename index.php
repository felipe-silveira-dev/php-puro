<?php
require 'utils/helpers.php';
require 'Database.php';

$config = require 'config.php';
$id = $_GET['id'] ?? 1;
$query = 'SELECT * FROM posts where id = ?';
$posts = (new Database($config['database']))->query($query, [$id])->fetch();

// dd($posts);
// foreach ($posts as $post) {
//     echo "<h2>{$post['title']}</h2>";
//     echo "<p>{$post['created_at']}</p>";
// }

require 'router.php';