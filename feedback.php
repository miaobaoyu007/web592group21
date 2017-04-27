<?php
    use google\appengine\api\users\UserService;
    global $appid,$page,$title,$userdata; 
 
   //ไฟล์ ความคดิเห็นจะบันทกึไวใ้นไฟล ์ json ต า ม ช ื่ อ $page    เ ช ่ น ห น้ า home ก็จะบันทกึขอ้มลูไวใ้นไฟล ์ home.json 
 
   $fbfile = "gs://$appid/$page.json";
   $fbdata = array(); 
 
//   ถา้มไีฟลข์อ้มลูใหอ้า่นไฟลม์าแสดงผล
   if(file_exists($fbfile)){
	   $fbjson = file_get_contents($fbfile);
	   $fbdata = json_decode($fbjson, true);
	   echo "<hr>";
	   foreach($fbdata as $fb){
		   $text = htmlspecialchars($fb['feedback']);
		   $time=date("d/m/Y H:i:s",$fb['time']); 
 
         //      มกีารเรยีก userpic เ พ ื่ อ แ ส ด ง ภ า พ ผ ู้ใ ช้    
			   $pic = userpic($fb['user']); 
 
   echo "<div class='row'>";
   echo "<div class='col-xs-1'><img src='$pic' width='48'></div>";
   echo "<div class='col-xs-10'>";
   echo "<a href='#'>$fb[name]</a><br>$text <br>";
   echo "<a href='#'>LIKE</a> $time<hr>";
   echo "</div>";
   echo "</div>";
   }
   }  
//   ก ร ณ ี ที่ ผู้ใ ช ้ login แลว้ ใหส้ามาร ถแสดงความคดิเห็นได้  
   $user  = UserService::getCurrentUser();
   if($user){
	   include("feedback_add.php");
	}
?> 