<h1>The blog details</h1>
<?php foreach ($posts as $post): ?>
	<article>
		<h3><?php echo $post->title; ?></h3>
		<div class="body">  <?php echo $post->body ?></div>
	</article>
<?php endforeach ?>
