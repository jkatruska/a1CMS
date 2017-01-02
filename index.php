<?php include "login.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>A1 Centrum</title>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="jquery-1.12.0.min.js"></script>
<script src="slideshow.js"></script>
<script src="jquery-smooth-scroll.js"></script>
<script>
    $(document).ready(function() {
      $('div.mainnav a').smoothScroll();
	  
	  $('.button').on('click', function(){
	  $('div.button_href').removeClass('button_href');
	  $(this).addClass('button_href');
	  });

	  $('#first_button').on('click', function(){
		  $('img.none').removeClass('none');
		  $('#suteren').addClass('block').siblings('.mapy').addClass('none');
		  $('div.none').removeClass('none');
		  $('#tag_suteren').addClass('block').siblings('.tag').addClass('none');
	  });
	  
	  $('#second_button').on('click', function(){
		  $('img.none').removeClass('none');
		  $('#prizemie').addClass('block').siblings('.mapy').addClass('none');
		  $('div.none').removeClass('none');
		  $('#tag_prizemie').addClass('block').siblings('.tag').addClass('none');

	  });
	  $('#third_button').on('click', function(){
		  $('img.none').removeClass('none');
		  $('#first_floor').addClass('block').siblings('.mapy').addClass('none');
		  $('div.none').removeClass('none');
		  $('#tag_1-poschodie').addClass('block').siblings('.tag').addClass('none');

	  });
	  $('#fourth_button').on('click', function(){
		  $('img.none').removeClass('none');
		  $('#second_floor').addClass('block').siblings('.mapy').addClass('none');
		  $('div.none').removeClass('none');
		  $('#tag_2-poschodie').addClass('block').siblings('.tag').addClass('none');

	  });
	  
	  $('.login-toggle').click(function() {
		$('#login').slideToggle();
	  });
    });
</script>
</head>
<body>
	<div id="wrapper">
    	<a class="login-toggle" href="#">Prihlásiť sa</a>
        	<div id="login" style="display:none;">
            	<form action="" method="post">
                	<input type="text" name="username" placeholder="Prihlasovacie meno" id="username"><br>
                    <input type="password" name="password" placeholder="Heslo" id="password">
                    <input type="submit" value="Prihlásiť sa" name="submit" id="login_button">
                </form>
                <div id="error_message"><?php echo $error; ?></div>
         </div>
        <div id="fixed_menu" class="mainnav">
        	<a href="#index" class="href_menu">
                <div class="menu_item">
                    <img src="img/index.png" class="menu_img">
                    <div class="menu_line">
                        <p class="text_menu">Úvod</p>
                    </div>
                </div>
            </a>
            <a href="#shop" class="href_menu">
                <div class="menu_item">
                    <img src="img/cart.png" class="menu_img">
                    <div class="menu_line">
                        <p class="text_menu">Zoznam obchodov</p>
                    </div>
                </div>
            </a>
            <a href="#business" class="href_menu">
            <div class="menu_item">
                <img src="img/suitcase.png" class="menu_img">
                <div class="menu_line">
                    <p class="text_menu">Zoznam firiem</p>
                </div>
            </div>
            </a>
            <a href="#photos" class="href_menu">
            <div class="menu_item">
                <img src="img/camera.png" class="menu_img">
                <div class="menu_line">
                    <p class="text_menu">Fotogaléria</p>
                </div>
            </div>
            </a>
            <a href="#map" class="href_menu">
            <div class="menu_item">
                <img src="img/map.png" class="menu_img">
                <div class="menu_line">
                    <p class="text_menu">Mapa</p>
                </div>
            </div>
            </a>
            <a href="#contact" class="href_menu">
            <div class="menu_item">
                <img src="img/phone.png" class="menu_img">
                <div class="menu_line">
                    <p class="text_menu">Kontakt</p>
                </div>
            </div>
            </a>
        </div>
        <div id="index_bg">
        	<div id="index">
            	<p id="title">Vitajte na stránke A1centrum.sk </p>
                <p id="content_index">Táto stránka ponúka kompletný zoznam firiem a obchodov sídliacich v našej budove a taktiež prehľad noviniek a akcií.</p>
                <a href="#shop">
                <div id="button_shop">
                	prejsť na zoznam obchodov
                </div>
                </a>
               	<div id="slideshow">
                <?php
					include "connect.php";
                    $query = mysql_query("SELECT * FROM slideshow");
					while ($row = mysql_fetch_assoc($query)){
						echo('<div>');
			echo ('<img src="'.$row['img'].'" class="slide">');
						echo('</div>');
	}?>
            	</div>
            </div>
        </div>
        <div id="shop_bg">
        	<div id="shop">
				 <?php include "get_shop.php" ?>
            </div>
        </div>
        <div id="business_bg">
        	<div id="business">
            	<?php include "get_business.php" ?>
            </div>
        </div>
        <div id="photos_bg">
        	<div id="photos">
            	<div id="photos_left">
                	<img class="photo" src="img/300312_Welcome_ground_night_large.jpg" style="width:25vw;">
                	<div id="photos_four">
                    	<img class="photo4 photo" src="img/interier1.jpg">
                        <img class="photo4 photo" src="img/interier2.jpg">
                        <img class="photo4 photo" src="img/interier3.jpg">
                        <img class="photo4 photo" src="img/interier4.jpg">
                    </div>
                </div>
                <div id="photos_mid">
                	<img class="photo1 photo" src="img/nice-shopping.jpg">
                </div>
                <div id="photos_right">
                	<img class="photo3 photo" src="img/interier8.jpg">
                    <img class="photo3 photo" src="img/interier9.jpg">
                    <img class="photo3 photo" src="img/interier12.jpg">
                </div>
            </div>
        </div>
        <div id="map_bg">
        	<div id="map">
            	<img src="img/suteren.png" usemap="#suteren-map" id="suteren" class="mapy">
                <img src="img/prizemie.png" usemap="#prizemie-map" id="prizemie" class="mapy none">            	
                <img src="img/1-floor.png" usemap="#floor-1" id="first_floor" class="mapy none">
                <img src="img/2-floor.png" usemap="#floor-2" id="second_floor" class="mapy none">
                <div>
                    <div class="button button_href" id="first_button">Suterén</div>
                    <div class="button" id="second_button">Prízemie</div>
                    <div class="button" id="third_button">1. Poschodie</div>
                    <div class="button" id="fourth_button">2. Poschodie</div>
				</div>
                <div>
                	<div id="tag_suteren" class="tag">
              		<?php 	$query = mysql_query("SELECT * FROM shop WHERE poschodie ='suteren'");
							while($row = mysql_fetch_assoc($query)){
								$suteren[$row['miestnost']] =  $row['nazov'];
							}
							$query = mysql_query("SELECT * FROM business WHERE poschodie ='suteren'");
							while($row = mysql_fetch_assoc($query)){
								$suteren[$row['miestnost']] =  $row['nazov'];
							}
							ksort($suteren);
							foreach($suteren as $key => $value){
							echo $key ." - ". $value . " | ";	
							}
					?>
                    </div>
                   	<div id="tag_prizemie" class="tag none">
              		<?php 	$query = mysql_query("SELECT * FROM shop WHERE poschodie ='prizemie'");
							while($row = mysql_fetch_assoc($query)){
								$prizemie[$row['miestnost']] =  $row['nazov'];
							}
							$query = mysql_query("SELECT * FROM business WHERE poschodie ='prizemie'");
							while($row = mysql_fetch_assoc($query)){
								$prizemie[$row['miestnost']] =  $row['nazov'];
							}
							ksort($prizemie);
							foreach($prizemie as $key => $value){
							echo $key ." - ". $value . " | ";	
							}
					?>
                    </div>
                	<div id="tag_1-poschodie" class="tag none" >
              		<?php 	$query = mysql_query("SELECT * FROM shop WHERE poschodie ='1-poschodie'");
							while($row = mysql_fetch_assoc($query)){
								$prve_poschodie[$row['miestnost']] =  $row['nazov'];
							}
							$query = mysql_query("SELECT * FROM business WHERE poschodie ='1-poschodie'");
							while($row = mysql_fetch_assoc($query)){
								$prve_poschodie[$row['miestnost']] =  $row['nazov'];
							}
							ksort($prve_poschodie);
							foreach($prve_poschodie as $key => $value){
							echo $key ." - ". $value . " | ";	
							}
					?>
                    </div>
                	<div  id="tag_2-poschodie" class="tag none">
              		<?php 	$query = mysql_query("SELECT * FROM shop WHERE poschodie ='2-poschodie'");
							while($row = mysql_fetch_assoc($query)){
								$druhe_poschodie[$row['miestnost']] =  $row['nazov'];
							}
							$query = mysql_query("SELECT * FROM business WHERE poschodie ='2-poschodie'");
							while($row = mysql_fetch_assoc($query)){
								$druhe_poschodie[$row['miestnost']] =  $row['nazov'];
							}
							ksort($druhe_poschodie);
							foreach($druhe_poschodie as $key => $value){
							echo $key ." - ". $value . " | ";	
							}
					?>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact_bg">
        	<div id="contact">
             	<p id="contact_text">
                Tatranská s.r.o<br>
                Ulica SNP 264/3<br>
				059 21 SVIT<br>
				<br>
				tel.: +421 52 77 57 542<br>
				fax:  +421 52 77 56 882<br>
				Mobil:+421 903 629 449<br>
					  +421 915 898 194<br>
				email:A1@a1centrum.sk                		
              </p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ssk!2ssk!4v1452799261805!6m8!1m7!1sITkGrvhqldkB6jDN1BSeng!2m2!1d49.05624704207078!2d20.19902719032606!3f275.6733468372995!4f4.625632714709795!5f0.7820865974627469" frameborder="0" style="border:0" id="street_view" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!--lightbox-->
	<?php 
		include "lb_shop.php"; 
		include "lb_business.php";
	?>
</body>
<script>imageMapResize();</script>
</html>