<?php
	include "connect.php";
	$id = $_GET["id"];
	$img_path = mysql_query("SELECT img_base FROM shop WHERE id='$id'");
	$row = mysql_fetch_assoc($img_path);
	unlink ($row['img_base']);

	$sql = "DELETE FROM shop WHERE id='$id'";
	mysql_query($sql);
	header("Location: cms.php");
	exit;
	
?>