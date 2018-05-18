<?php 
require_once "init.php";
$new = [];
$posts = $query->select(["*" , "posts.id as idPosts"],"users")->join("posts" , "id" , "createdBy")->all();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Soal ^</title>
	<style type="text/css">
		ul li{
			list-style: none;
		}
	</style>
</head>
<body>
	<?php foreach ($posts as $post): ?>
	<?php
		$comments = $query->select(false,"comments")->where(["postId"=>$post->createdBy])->all();
	?>	
	<ul>
		<li>- posts.title:<?= $post->title?></li>
		<li>- posts.users.username:dibuat oleh <?= ucwords($post->username)?></li>
		<li>- comments:
			<ul>
			<?php foreach ($comments as $comment): ?>
				<li>- <?= $comment->comment?></li>
			<?php endforeach ?>
			</ul>
		</li>
	</ul>
	<?php endforeach ?>

</body>
</html>
