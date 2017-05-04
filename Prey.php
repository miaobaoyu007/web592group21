<!doctype html>
<?php
 $appid = "web592group21.appspot.com";
 //$page = $_GET['p'];
 if($page=='') $page='main';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
	 
echo "<div class='panel panel-danger'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }
 use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}
?>
<html>
<head>
<title>Prey</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	
</head>
<body>

	<div class="men_banner">
   	  <div class="container">
   		<div class="logo">
			<a href="main.php"><img src="images/ss.png" alt=""/></a>
		</div>
	  
  <div class="menu">
	     <ul class="megamenu skyblue">
			<li><a class="color2" href="shop.html">Shop</a>
		<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<ul>
									<li><a href="men.html">Action</a></li>
									<li><a href="men.html">Adventure</a></li>
									<li><a href="men.html">Cascual</a></li>
									<li><a href="men.html">Sports</a></li>
									<li><a href="men.html">RPG</a></li>
									<li><a href="men.html">Simulation</a></li>
								</ul>	
							</div>							
						</div>
				<li><a class="color7" href="404.html">News</a></li>
				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	    </div>
   </div>
   <div class="men">
   		
   	<div class="container">
      <div class="col-md-9 single_top">
	  <div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="shop.php" title="Go to Home Page">Shop</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                       ALL GAME&nbsp;
                    </li>
                </ul>
             
                <div class="clearfix"></div>
			   </div>
      	<div class="single_left">
      	  <div class="labout span_1_of_a1">
			<ul id="etalage">
			
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="ac/ac.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="ac/ac.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="ac/a2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="ac/a2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="ac/a3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="ac/a3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="ac/a4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="ac/a4.jpg"class="img-responsive"  />
							</li>
							<li>
								<img class="etalage_thumb_image" src="ac/a5.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="ac/a5.jpg"class="img-responsive"  />
							</li>
							<li>
							<img class="etalage_thumb_image" src="ac/a1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="ac/a1.jpg" class="img-responsive" title="" />
									</li>
									<li>
							<img class="etalage_thumb_image" src="ac/ac1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="ac/ac1.jpg" class="img-responsive" title="" />
									</li>
			 </ul>
		     <div class="clearfix"></div>	
	    </div>
		
		<div class="cont1 span_2_of_a1">
				<h1>Prey</h1>
				<p class="availability">Availability: <span class="color">In stock</span></p>
			    <div class="price_single">
				  
				  <span class="actual">$29.99</span><a href="#">click for offer</a>
				</div>
				<h2 class="quick">About :</h2>
				<p class="quick_desc">In Prey, you awaken aboard Talos I, a space station orbiting the moon in the year 2032. You are the key subject of an experiment meant to alter humanity forever – but things have gone terribly wrong. The space station has been overrun by hostile aliens and you are now being hunted. As you dig into the dark secrets of Talos I and your own past, you must survive using the tools found on the station -- your wits, weapons, and mind-bending abilities. The fate of the Talos I and everyone aboard is in your hands.
</p>
			    <div class="wish-list">
				 	<ul>
				 	    <li class="compare"><a href="http://cdn.akamai.steamstatic.com/steam/apps/2029477/movie480.webm?t=1447358890">Gameplay</a></li>
				 	</ul>
				 </div>
				
				<div class="quantity_box">
					<ul class="product-qty">
					   <span>Quantity:</span>
					   <select>
						 <option>1</option>
						 <option>2</option>
						 <option>3</option>
						 <option>4</option>
						 <option>5</option>
						 <option>6</option>
					   </select>
				    </ul>
				    <ul class="single_social">
						<li><a href="#"><i class="fb1"> </i> </a></li>
						<li><a href="#"><i class="tw1"> </i> </a></li>
						<li><a href="#"><i class="g1"> </i> </a></li>
					
		   		    </ul>
		   		    <div class="clearfix"></div>
	   		    </div>
			    <a href="reservation.html" title="Online Reservation" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a>
			</div>
		    <div class="clearfix"> </div>
		</div>
        <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>SYSTEM REQUIREMENTS</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  <h3>Key Features</h3>
									  <ul>
										<li> </li><li>Singular Setting
Orbiting the Moon, the Talos I space station symbolizes the height of private space enterprise. Explore a lavish craft designed to reflect corporate luxury of the 1960s, and navigate interconnected, non-linear pathways built to hide countless secrets.</li>
										<ul>
										<li>Loot underwater shipwrecks
										
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									  								<table>
									<tr>
									  	 <th>MINIMUM:</th>
    <th>RECOMMENDED:</th>
  </tr>
  <tr><td>OS: Windows Vista (SP2), 7 (SP1), 8, 8.1, 10 (1607) – 64-bit or 32-bit<br>
  Intel i5-2400, AMD FX-8320<br>
Memory: 5 GB RAM<br>
 GTX 660 2GB, AMD Radeon 7850 2GB<br>
Storage: 30 GB available space<br>
Sound Card: DirectX compatible sound card<br></td>
  </tr>
</table>
</ul>
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
	<div class="container" style=>
						   <?php panel_include($title,"main_body.php" ,"primary"); ?>
						   
						   <?php panel_include("User","work8_user.php"); ?>
						   </div>
									  </ul>      
							     </div>	
							 </div>
					      </div>
					 </div>	
		</div>
		<div class="col-md-3">
	      <h3 class="m_1">Related Products</h3>
	      <ul class="product">
	      	<li class="product_img"><img src="images/saint.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="saint.php">SaintRow4</a></h4>
	      		<p class="single_price">$30</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="product">
	      	<li class="product_img"><img src="images/H1.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="h1.php">H1Z1</a></h4>
	      		<p class="single_price">$18</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="product">
	      	<li class="product_img"><img src="images/how.png" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="how.php">How to Survive</a></h4>
	      		<p class="single_price">$15.99</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	     <ul class="product">
	      	<li class="product_img"><img src="ac/ac.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="ac.php">PLAYERUNKNOWN'S BATTLEGROUNDS</a></h4>
	      		<p class="single_price">$29.99</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      	<div class="clearfix"> </div>
	      </ul>
        </div>
     <div class="clearfix"> </div>
	</div>
    </div>
   </div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"> </div>
   	</div>
   </div>
</body>
</html>		