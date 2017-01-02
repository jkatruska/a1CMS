<?php
include "connect.php";
$target_dir = "img/shop/";
$target_file = $target_dir . basename($_FILES["img_base"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//************************************************
include "text.php";
$target_file = strtr( $target_file, $unwanted_array );
$target_file = str_replace(' ', '_', $target_file);

$nazov = addslashes($_POST['nazov']);
$hover_cislo = addslashes($_POST['hover_cislo']);
$hover_mail = addslashes($_POST['hover_mail']);
$hover_web = addslashes($_POST['hover_web']);
$popis = addslashes($_POST['popis']);
$poschodie = $_POST['floors'];
$miestnost = $_POST['rooms'];
//************************************************
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img_base"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Súbor nie je obrázok";
        $uploadOk = 0;
    }
}

//Skontrolovať či súbor už existuje
if (file_exists($target_file)) {
    echo "Súbor už existuje";
    $uploadOk = 0;
}
//Skontrolovať veľkosť
if ($_FILES["img_base"]["size"] > 5000000) {
    echo "Súbor je príliš veľký. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Váš súbor nebol nahraný.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img_base"]["tmp_name"], $target_file)) {
	mysql_query("INSERT INTO shop VALUES ('','$nazov','$hover_cislo','$hover_mail', '$hover_web', '$popis', '$target_file', '$poschodie', '$miestnost')") or die(mysql_error());
			header("Location: cms.php");
			exit();
    } 
	else {
        echo "Vyskytla sa chyba pri nahrávaní na server.";
    }
}
?>