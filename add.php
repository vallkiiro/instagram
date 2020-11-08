<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");
	$add = "INSERT INTO posts (text, img, user)
	VALUES ('".$_GET["text"]."', '".$_GET["img"]."', '".$_GET["user"]."')";
	mysqli_query($connect, $add);
	header("location: index.php")
?>