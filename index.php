<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop", "root" );
$pdo->setAttribute( PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );
?>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .a1:hover{
            opacity:5.0;
        }
    </style>
</head>
<body>
    <!DOCTYPE html>
<html>
<title>ร้านค้าเกมออนไลน์</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
    body{
        background-color:beige;
       
    }
   
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
    <span class="w3-bar-item w3-button" >Type</span>
    <io>
    <li><a href="#food" onclick="w3_close()" class=" w3-button">action</a></li>
        <li><a href="#food" onclick="w3_close()" class=" w3-button">survival</a></li>
        <li><a href="#food" onclick="w3_close()" class=" w3-button">moba</a></li>
    </io>
  <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
     <div class="w3-button  w3-padding-8 w3-right" >
         <form method="post" action="login.php">
         username : <input type="text" name="username" style="border:solid darkred;"> password : <input type="password" name="password" style="border:solid darkred;"> <input type="submit" value="login">
             </form>
    </div> 

  
</div>


  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content " style="max-width:1200px;margin-top:100px">
<?php
    $rr=$pdo->query("select * from game");

    while($row=$rr->fetch()){
 echo "<div class='w3-third w3-container w3-margin-bottom a1'>
 <div class='w3-container w3-white'>
    <a href='#'><img src='img/".$row["id_game"].".jpg' width='215' , height='155'></a>
    <div class='w3-container w3-gray'>
       <h3>".$row['name_game']."</h3>
     <span> type :".$row['type_game']."</span><br>
     <span> about :".$row['info']."</span><br>
      <span>price :".$row['price']."</span><br><br><br>
      </div>
      </div>
      </div>
      ";
    
   
 
  }
  
  ?>
    
  <!-- Second Photo Grid-->
 </div>
<br><br>
  <!-- Pagination -->
  
    <div class="w3-bar  ">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  
  
  <hr id="about">

  <!-- About Section -->

  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
  
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>

</body>    
</html>