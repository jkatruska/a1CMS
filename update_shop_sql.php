<?php
	include "connect.php";
	$nazov = addslashes($_POST['nazov']);
	$hover_cislo = addslashes($_POST['hover_cislo']);
	$hover_mail = addslashes($_POST['hover_mail']);
	$hover_web = addslashes($_POST['hover_web']);
	$popis = addslashes($_POST['popis']);
	$poschodia =  $_POST['floors'];
	$miestnosti = $_POST['rooms'];

	$id = $_POST['id'];
	$checksum = array("name" => "",
				 "type" => "",
				 "tmp_name" => "",
				 "error" => 4,
				 "size" => 0);
	if(($_FILES['image'])== $checksum){
		$img_path = mysql_query("SELECT img_base FROM shop WHERE id='$id'");
		$row = mysql_fetch_assoc($img_path);
		$target_file = $row['img_base'];
	}
	else{
		$target_dir = "img/shop/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		include "text.php";
		$target_file = strtr( $target_file, $unwanted_array );
		$target_file = str_replace(' ', '_', $target_file);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$img_path = mysql_query("SELECT img_base FROM shop WHERE id='$id'");
		$row = mysql_fetch_assoc($img_path);
		unlink ($row['img_base']);
	}
	$sql = "UPDATE shop SET nazov='$nazov',hover_cislo='$hover_cislo',hover_mail='$hover_mail',hover_web='$hover_web',popis='$popis',img_base='$target_file',poschodie='$poschodia' ,miestnost='$miestnosti' WHERE id='$id'";
	mysql_query($sql) or die(mysql_error());
	header("Location: cms.php");
	exit;

?>