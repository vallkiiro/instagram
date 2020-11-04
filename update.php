<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");
	$update = 'UPDATE posts
			SET user = "52hwoa9q"
			WHERE id = 2 ';
	$query = mysqli_query($connect, $update);
?>