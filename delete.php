<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");
	$delete  = "DELETE FROM posts WHERE id = '{$_GET["id"]}' ";
	$query = mysqli_query($connect, $delete);
	header("location:index.php");
?>