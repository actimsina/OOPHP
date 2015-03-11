<?php 
require 'app/start.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$title = $_POST['title'];
	$body = $_POST['body'];

	if (empty($title) || empty($body)) {
		$status = 'Please fill out both inputs';
	} else {
		// Create a new row in the table
		$post = new Post();
		$post->title = $title;
		$post->body = $body;
		$post->save();
	}
}else {
	$status = '';
}

$view_path = 'app/views/admin.view.php';
include 'app/views/layout.php';

