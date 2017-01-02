$(document).ready(function(){
		//load ajax
		$("#cms_button_shop").click(function(){
       		$("#cms_wrapper").load("shop.php");
         });
		 
		$("#cms_button_business").click(function(){
       		$("#cms_wrapper").load("business.php");
         });
		 
		$("#cms_button_slideshow").click(function(){
			$("#cms_wrapper").load("slideshow.php");
		});
		
		$("#add_shop").click(function(){
			$("#cms_wrapper").load("form_shop.php");
		});
		
		$("#add_business").click(function(){
			$("#cms_wrapper").load("form_business.php");
		});
		//ajax
		$(document).on('click','.cms_button_add_shop',function(){
			$("#cms_wrapper").load("form_shop.php");
		});
		$(document).on('click','.cms_button_add_business',function(){
			$("#cms_wrapper").load("form_business.php");
		});
		$(document).on('click','.cms_button_add_slideshow',function(){
			$("#cms_wrapper").load("form_slideshow.php");
		});

		//load id shop
		$(document).on('click','.cms_href_shop',function(e){
			e.preventDefault();
			var url = ($(this).attr('href'));
			var id = getURLParameter(url, 'id');
			loadId(id);
			
		});
		function getURLParameter(url, name) {
   		 	return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
		}
		function loadId(id){
			$("#cms_wrapper").load("update_shop.php?id=" + id);
		}
		//load id business
		$(document).on('click','.cms_href_business',function(e){
			e.preventDefault();
			var url = ($(this).attr('href'));
			var id = getUrlBusiness(url, 'id');
			loadIdBusiness(id);
			
		});
		function getUrlBusiness(url, name) {
   		 	return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
		}
		function loadIdBusiness(id){
			$("#cms_wrapper").load("update_business.php?id=" + id);
		}
		//toggle logout
		$('#cms_arrow_bg').click(function() {
		$('#cms_toggle').slideToggle();
	  	});
		
 });
