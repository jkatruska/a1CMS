<?php
include "connect.php";
$target_dir = "img/slideshow/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//************************************************
include "text.php";
$target_file = strtr( $target_file, $unwanted_array );
$target_file = str_replace(' ', '_', $target_file);


//************************************************
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
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
if ($_FILES["img"]["size"] > 5000000) {
    echo "Súbor je príliš veľký. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Váš súbor nebol nahraný.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
	mysql_query("INSERT INTO slideshow VALUES ('','$target_file')") or die(mysql_error());
			header("Location: cms.php");
			exit();
    } 
	else {
        echo "Vyskytla sa chyba pri nahrávaní na server.";
    }
}
?>