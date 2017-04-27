<!doctype html>
<?php
 $appid = "web592group21.appspot.com";
 $page = $_GET['p'];
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
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=TIS-620" />
<title>Login </title>
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
</head>
<?php include("navbar.php"); ?>
</div>
<body role="document">
<header class="page-header text-center">
<div class="container">
<br>
<br>
<?php panel_include("User","work8_user.php"); ?>
</body>