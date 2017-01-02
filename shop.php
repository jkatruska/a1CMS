<div id="cms_shop">
	<div class="cms_title_name">
    Obchody
    </div>
        <div class="cms_button_add_shop">
            <img src="img/cms_add.png" class="cms_add_img_button"><p style="margin:0;position:absolute;left:2.5vw;">Pridať nový obchod</p>
        </div>
<div class="cms_line"></div>
<?php 
	include "connect.php";
	echo('<table id="table">');
		echo('<tr id="head">');
			echo('<th>Názov</th>');
			echo('<th>Tel. číslo</th>');
			echo('<th>Email</th>');
			echo('<th>Web</th>');
			echo('<th>Popis</th>');
			echo('<th>Upraviť</th>');
			echo('<th>Vymazať</th>');
		echo('</tr>');
	$query = mysql_query("SELECT * FROM shop");
	while ($row = mysql_fetch_assoc($query)){
		echo('<tr>');
			echo('<td class="table_name">'.$row['nazov'].'</td>');
			echo('<td>'.$row['hover_cislo'].'</td>');
			echo('<td>'.$row['hover_mail'].'</td>');
			echo('<td>'.$row['hover_web'].'</td>');
			echo('<td>'.substr($row['popis'],0, 20).'...'.'</td>');
			echo('<td><a href="update_shop.php?id=' . $row['id']. '" class="cms_href_shop"><div class="cms_button_table"><img src="img/cms_pencil.png" class="img_update">Upraviť</div></a></td>');
			echo('<td><a id="button" href="delete_shop.php?id=' . $row['id']. '"><div class="cms_button_table"><img src="img/cms_bin.png" class="img_delete">Vymazať</div></a></td>');

		echo('</tr>');
	}	
	echo('</table>');
?>	
</div>