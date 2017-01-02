<div id="cms_slideshow">
	<div class="cms_title_name">
    Slideshow
    </div>
        <form action="upload_slideshow.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img" id="fileToUpload"  class="custom-file-input-add change-add" accept="image/*">
            <input type="submit" value="nahrať" name="submit" id="submit-add-slideshow">
        </form>
        
<div class="cms_line"></div>
<?php 
	include "connect.php";
	echo('<table id="table">');
		echo('<tr id="head">');
			echo('<th>Náhľad</th>');
			echo('<th>Vymazať</th>');
		echo('</tr>');
	$query = mysql_query("SELECT * FROM slideshow");
	while ($row = mysql_fetch_assoc($query)){
		echo('<tr>');
			echo ('<td style="width:80%;"><img src="'.$row['img'].'" style="width:13vw;"></td>');
			echo('<td><a id="button" href="delete_slideshow.php?id=' . $row['id']. '"><div class="cms_button_table"><img src="img/cms_bin.png" class="img_delete">Vymazať</div></a></td>');
		echo('</tr>');
	}	
	echo('</table>');
?>	
</div>