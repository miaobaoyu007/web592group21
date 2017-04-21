<!DOCTYPE HTML>   
<?php   $appid = "web592group21.appspot.com"; 
 $page  = $_GET['p'];  
 if($page=='') $page='main';  
 $title = $page;   
 function panel_include($title,$file,$ptype='default'){ 
 echo "<div class='panel panel-$ptype'>"; 
 echo "<div class='panel-heading'>$title</div>";  
 echo "<div class='panel-body'>";  
 if(file_exists($file)){  
 include($file); 
 }else{  
 echo "ไมพ่บไฟล ์ $file "; 
 }  echo "</div>"; 
 echo "</div>"; 
 }
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=TIS-620" />
<title>GAME SHOP </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/hover_pack.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
 <!--ajax-->
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
</script>
</head>

</div>
<body>
<?php include("navbar.php"); ?> 
<>
<!-- slide -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/tr.jpg" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="images/dota.jpg" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
      <img src="images/s3.png" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
      <img src="images/s4.png" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end -->
<?php panel_include("User","login.php"); ?> 
		</div>
	</div>
</div>

   <div class="main">
    <div class="container">
     <div class="top_grid" id="arrow">
   	  <div class="content_top">
   		<div class="col-md-8 col1">
   		   <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/i.jpg" class="img-responsive" alt=""/><div class="b-wrapper2"><h2 class="b-animate b-from-left    b-delay03 ">AirMech</h2><p class="b-animate b-from-right    b-delay03 ">AirMech is fast paced Action RTS that can be played like Dota or Starcraft--you can battle on the ground or command from the skies!.</p></div></a>
        </div>	
   		<div class="col-md-4">
   		   <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/batman.jpg" class="img-responsive" alt=""/><div class="b-wrapper1"><h2 class="b-animate b-from-left    b-delay03 ">Gotham City Impostors</h2><p class="b-animate b-from-right    b-delay03 ">Join the Batman "helpers" or junior Jokerz ?</p></div></a>
   		  <div class="grid1">
   		  	 <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/paladin.png" class="img-responsive" alt=""/><div class="b-wrapper1"><h2 class="b-animate b-from-left    b-delay03 ">Paladins®</h2><p class="b-animate b-from-right    b-delay03 ">Enter a fantasy world of ancient technology in Paladins.</p></div></a>
   		  </div>
   		</div>
   		<div class="clearfix"> </div>
		</div>
	  Recommend
   	  <div class="content_middle">
   	  	<div class="col-md-4 col2">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/saint.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Saints Row IV</h2><p class="b-animate b-from-right    b-delay03 ">The US President must save the Earth from alien overlord.</p></div></a>
   	  	</div>
   	  	<div class="col-md-4 col2">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/H1.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">H1Z1: King of the Kill</h2><p class="b-animate b-from-right    b-delay03 ">H1Z1: King of the Kill is a fast-paced shooter in which players compete in large-scale chaotic PvP spectacles of skill.</p></div></a>
   	  	</div>
   	  	<div class="col-md-4">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/how.png" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">How to Survive</h2><p class="b-animate b-from-right    b-delay03 ">“A real Gem” – Destructoid at E3 “Offers a different experience for zombie game veterans”</p></div></a>
   	  	</div>
   	  	<div class="clearfix"> </div>
   	  </div>
   	  </div>
   	</div>
   	<div class="content_middle_bottom">
   		<div class="header-left" id="home">
		<center><h2>Upcoming Game !!!</h2>
		      <section>
				<ul class="lb-album" >
					<li>
						<a href="#image-1">
							<img src="images/cm1.jpg"  class="img-responsive" alt="image01"/>
							<span>Upcoming !!!!!</span>
						</a>
						
					</li>
					<li>
						<a href="#image-2">
							<img src="images/disho.jpg"  class="img-responsive" alt="image02"/>
							<span>Dishonored2</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="images/disho.jpg"  class="img-responsive" alt="image02"/>
							<div>							
								<h3>Dishonored2 <span>/DH2/</span></h3>
								<p>Dishonored 2 - Free Trial Available Now!</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-3">
							<img src="images/ff.png"  class="img-responsive" alt="image03"/>
							<span>Fantasy Farming: Orange Season</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="images/ff.png"  class="img-responsive" alt="image03"/>
							<div>							
								<h3>Fantasy Farming<span> Orange Season</span></h3>
								<p>Available: 22 April</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-4">
							<img src="images/cr.jpg"  class="img-responsive" alt="image04"/>
							<span>Cadence</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="images/cr.jpg"  class="img-responsive" alt="image04"/>
							<div>							
								<h3>Cadence<span>/əˈdäjō/</span></h3>
								<p>Early Access Game</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="images/me.png"  class="img-responsive" alt="image05"/>
							<span>Middle-earth: Shadow of War</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="images/me.png"  class="img-responsive" alt="image05"/>
							<div>							
								<h3>Middle-earth: <span>Shadow of War</span></h3>
								<p>Release Date: August 22, 2017
</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="images/ol.jpg"  class="img-responsive" alt="image06"/>
							<span>Outlast 2</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="images/ol.jpg"  class="img-responsive" alt="image06"/>
							<div>							
								<h3><a href ="https://youtu.be/AwFPih9-bNM">Outlast 2 </a>
								<span><a href="http://www.metacritic.com/company/red-barrels">Red Barrels </a></span></h3>
								<p> Release Date: Apr 25, 2017 Also On: PC, Xbox One </p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="images/sni.jpg"  class="img-responsive" alt="image07"/>
							<span>Sniper: Ghost Warrior 3 </span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="images/sni.jpg"  class="img-responsive" alt="image07"/>
							<div>							
								<h3>Sniper: Ghost Warrior 3 <span><a href="http://www.metacritic.com/company/city-interactive">City Interactive</a></span></h3>
								<p> Release Date: Apr 25, 2017Also On: PlayStation 4, Xbox One </p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="images/sy.jpg"  class="img-responsive" alt="image08"/>
							<span>
Syberia 3</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="images/sy.jpg"  class="img-responsive" alt="image08"/>
							<div>							
								<h3>Syberia 3 <span>
    Microids </span></h3>
								<p> Release Date: Apr 25, 2017
Also On: PC, Xbox One </p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
		</div>
		<div class="field_content">
		    <h1># Icndy On Instagram</h1>
		    <h2>View Hashtag</h2>
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
					<li><a href="About.php">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
		
		</div>
	</div>
</div> 
	    <div class="clearfix"></div>
	    <div class="copy">
           <p>&copy; Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
   	</div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>		