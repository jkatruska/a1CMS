<?php 
	include "connect.php";
	$id = $_GET["id"];
	$img_path = mysql_query("SELECT img FROM slideshow WHERE id='$id'");
	$row = mysql_fetch_assoc($img_path);
	unlink ($row['img']);

	$sql = "DELETE FROM slideshow WHERE id='$id'";
	mysql_query($sql);
	header("Location: cms.php");
	exit;
	?>