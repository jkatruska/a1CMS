	<?php
		include "connect.php";
		$id = $_GET["id"];
		$sql = "SELECT * FROM business WHERE id= '$id'";
		$sada = mysql_query($sql);
		$zaznam = mysql_fetch_array($sada);
		
	?><head>
<script src="jquery-2.2.0.min.js"></script>
<script src="jquery.chained.min.js"></script>
<script charset="utf-8">
  $(function(){
       $("#rooms").chained("#floors");
  });
  </script>
</head>
       
    	<div class="update_form">
       		<div class="header_form">
            	<p class="update_form_label">Názov</p>
                <p class="update_form_label">Tel.číslo</p>
                <p class="update_form_label">Email</p>
                <p class="update_form_label">Web</p>
                <p class="update_form_label">Poschodia</p>
                <p class="update_form_label">Zmeniť obrázok</p>
            </div>
        	<form method="post" action="update_business_sql.php" enctype="multipart/form-data" id="update_shop">
            <input type="text" name="nazov" value="<?php echo $zaznam['nazov']; ?>" class="input">
            <input type="text" name="hover_cislo" value="<?php echo $zaznam['hover_cislo']; ?>" class="input">
            <input type="text" name="hover_mail" value="<?php echo $zaznam['hover_mail']; ?>" class="input">
            <input type="text" name="hover_web" value="<?php echo $zaznam['hover_web']; ?>" class="input">
            <select id="floors" name="floors">
                      <option value="">--</option>
                      <option value="suteren">Suterén</option>
                      <option value="prizemie">Prízemie</option>
                      <option value="1-poschodie">1. poschodie</option>
                      <option value="2-poschodie">2. poschodie</option>
            
                    </select>
                    <select id="rooms" name="rooms">
                      <option value="">--</option>
                      <option value="S01" class="suteren">S01</option>
                      <option value="S02" class="suteren">S02</option>
                      <option value="S03" class="suteren">S03</option>
                      <option value="S04" class="suteren">S04</option>
                      <option value="S05" class="suteren">S05</option>
                      <option value="S06" class="suteren">S06</option>
                      <option value="S07" class="suteren">S07</option>
                      <option value="S08" class="suteren">S08</option>
                      <option value="S09" class="suteren">S09</option>
                      <option value="S10" class="suteren">S10</option>
                      <option value="S11" class="suteren">S11</option>
                      <option value="S12" class="suteren">S12</option>
                      <option value="S13" class="suteren">S13</option>
                      <option value="S14" class="suteren">S14</option>
                      <option value="S15" class="suteren">S15</option>
                      <option value="S16" class="suteren">S16</option>
                      <option value="S17" class="suteren">S17</option>
                      <option value="S18" class="suteren">S18</option>
            
            
                      <option value="P01" class="prizemie">P01</option>
                      <option value="P02" class="prizemie">P02</option>
                      <option value="P03" class="prizemie">P03</option>
                      <option value="P04" class="prizemie">P04</option>
                      <option value="P05" class="prizemie">P05</option>
                      <option value="P06" class="prizemie">P06</option>
                      <option value="P07" class="prizemie">P07</option>
                      <option value="P08" class="prizemie">P08</option>
                      <option value="P09" class="prizemie">P09</option>
                      <option value="P10" class="prizemie">P10</option>
                      <option value="P11" class="prizemie">P11</option>
                      <option value="P12" class="prizemie">P12</option>
                      <option value="P13" class="prizemie">P13</option>
                      <option value="P14" class="prizemie">P14</option>
                      <option value="P15" class="prizemie">P15</option>
                      <option value="P16" class="prizemie">P16</option>
                      <option value="P17" class="prizemie">P17</option>
                      <option value="P18" class="prizemie">P18</option>
                      <option value="P19" class="prizemie">P19</option>
                      <option value="P20" class="prizemie">P20</option>
                      <option value="P21" class="prizemie">P21</option>
                      <option value="P22" class="prizemie">P22</option>
            
                      <option value="101" class="1-poschodie">101</option>
                      <option value="102" class="1-poschodie">102</option>
                      <option value="103" class="1-poschodie">103</option>
                      <option value="104" class="1-poschodie">104</option>
                      <option value="105" class="1-poschodie">105</option>
                      <option value="106" class="1-poschodie">106</option>
                      <option value="107" class="1-poschodie">107</option>
                      <option value="108" class="1-poschodie">108</option>
            
                      <option value="201" class="2-poschodie">201</option>
                      <option value="202" class="2-poschodie">202</option>
                      <option value="203" class="2-poschodie">203</option>
                      <option value="204" class="2-poschodie">204</option>
                      <option value="205" class="2-poschodie">205</option>
                      <option value="206" class="2-poschodie">206</option>
                      <option value="207" class="2-poschodie">207</option>
                      <option value="208" class="2-poschodie">208</option>
                      <option value="209" class="2-poschodie">209</option>
                      <option value="210" class="2-poschodie">210</option>
                      <option value="211" class="2-poschodie">211</option>
                      <option value="212" class="2-poschodie">212</option>
                      <option value="213" class="2-poschodie">213</option>
            
                    </select>
            <input type="file" name="image" class="custom-file-input change" >
            <textarea name="popis" class="popis"><?php echo $zaznam['popis']; ?></textarea>
            <input type="hidden" name="id" value="<?php echo $id ;?>" ><br>
            <input type="submit" value="zmeniť" name="submit" id="submit">
            </form>
            <a href="cms.php" id="back">Späť</a>
            <p class="popis_label">Popis</p>

       </div>
