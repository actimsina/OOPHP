<?php 
require 'app/start.php';
$posts = Post::find('all');

// $post->title = 'My cool post';
// $post->body = 'After reading this ...';
// $post->save();

$view_path = 'app/views/index.view.php';
include 'app/views/layout.php';


?>

