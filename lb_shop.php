<?php 
	include "connect.php";
	$query = mysql_query("SELECT * FROM shop");
	while($row = mysql_fetch_assoc($query)){
    echo ('<div class="lightbox" id="s' . $row['id'] .'">');
    	echo ('<a href=#_><img id="close_lb" src="img/cros.png"> </a>');
        echo ('<div class="lightbox_container">');
      	//<img class="img_lb">
        echo ('<p class="title_lb">' . $row['nazov'] . '</p>');
		echo nl2br(('<p class="description">' . $row['popis'] . '</p>'));
		$poschodie = $row['poschodie'];
		switch ($poschodie){
			case "suteren":
				$switch_poschodie =  "Suterén";
				break;
			case "prizemie":
				$switch_poschodie =  "Prízemie";
				break;
			case "1-poschodie":
				$switch_poschodie =  "Prvé poschodie";
				break;
			case "2-poschodie":
				$switch_poschodie =  "Druhé poschodie";
				break;
			
			}
		echo ('<p class="lb_place"> '.$switch_poschodie.' -  '. $row['miestnost'] .'</p>');
      	echo ('</div>');
    echo ('</div>');
	}
?>