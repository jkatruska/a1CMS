<?php
	include "connect.php";
	$query = mysql_query("SELECT * FROM business");
	$id = mysql_num_rows($query);
	$y = $id / 5;
	for($x=0; $x<=$y; $x++) {
	$counter = 0;
			echo ('<div class="line1">');
			while($row = mysql_fetch_assoc($query)){
			echo ('<a href="#b' .$row['id'].'" style="display:inline-block;">');
				echo ('<div class="box">');
					if(empty($row['img_base'])){
						echo '';	
					}
					else
					{
						echo ('<img class="tile_img" src="' . $row['img_base'] .'">');
					}
					echo ('<p class="tile_text">' . $row['nazov'] . '</p>');
					echo ('<div class="tile_overlay">');
						echo ('<p class="overlay_title">telefón:</p>');
						echo ('<p class="overlay_text">'. $row['hover_cislo'] . '</p>');
						echo ('<p class="overlay_title">E-mail:</p>');
						echo ('<p class="overlay_text">' . $row['hover_mail'] . '</p>');
						echo ('<p class="overlay_title">Web:</p>');
						echo ('<p class="overlay_text">' . $row['hover_web'] . '</p>');
					echo ('</div>');
			   echo('</div>');
			echo('</a>');
			$counter++;
			if ($counter == 3) break;
			}
			echo ('</div>');
	$counter = 0;
			echo ('<div class="line2">');
			while($row = mysql_fetch_assoc($query)){
			echo ('<a href="#b' .$row['id'].'" style="display:inline-block;">');
				echo ('<div class="box">');
					if(empty($row['img_base'])){
						echo '';	
					}
					else
					{
						echo ('<img class="tile_img" src="' . $row['img_base'] .'">');
					}					
					echo ('<p class="tile_text">' . $row['nazov'] . '</p>');
					echo ('<div class="tile_overlay">');
						echo ('<p class="overlay_title">telefón:</p>');
						echo ('<p class="overlay_text">'. $row['hover_cislo'] . '</p>');
						echo ('<p class="overlay_title">E-mail:</p>');
						echo ('<p class="overlay_text">' . $row['hover_mail'] . '</p>');
						echo ('<p class="overlay_title">Web:</p>');
						echo ('<p class="overlay_text">' . $row['hover_web'] . '</p>');
					echo ('</div>');
			   echo('</div>');
			echo('</a>');
			$counter++;
			if ($counter == 2) break;
			}
			echo ('</div>');
	}
?>