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
 echo "Да╬Х╨Д©е Л $file "; 
 }  echo "</div>"; 
 echo "</div>"; 
 }
 ?>
<?php panel_include("User","login.php"); ?> 