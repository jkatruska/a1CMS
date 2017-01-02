<?php session_start(); 
if (isset($_SESSION['login_user'])){
	
}
else{
	header("location: index.php");
	exit() ;
}
?>
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>a1centrum</title>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="jquery-2.2.0.min.js"></script>
<script src="jquery.chained.min.js"></script>
<script charset="utf-8">
  $(function(){
      $("#series").chained("#mark");
  });
  </script>
<script src="cmsJS.js"></script>
</head>

<body>
	<div id="cms_top_panel">
    	<p id="cms_logo">A1centrum</p>
        <div id="cms_arrow_bg">
        	<img src="img/cms_arrow.png" id="cms_arrow">
        </div>
        <div id="cms_toggle" style="display:none;">
        	<a href="logout.php">Odhlásiť sa</a>
        </div>
    </div>
	<div id="cms_panel">
    	<ul>
        	<li id="cms_button_shop"><img src="img/cms_cart.png" class="cms_menu_img">Obchody
            <li id="cms_button_business"><img src="img/cms_suitcase.png" class="cms_menu_img">Firmy
            <li id="cms_button_slideshow"><img src="img/cms_slideshow.png" class="cms_menu_img">Slideshow
        </ul>
    </div>
    <div id="cms_wrapper">
    <?php include "shop.php"; ?>
    </div>
</body>
</html>
