<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop", "root" );
$pdo->setAttribute( PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );
?>
<html>
<head>
    <script>
    var a=Document.getElementById("pass");
      var b=Document.getElementById("pass1"); 
        if
    </script>
    <style>
        .box{
            display: block;
            border: 2px solid gray;
            width: 500px;
            height: 300px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
        }
        .o{
            color: coral;
            font-size: 20px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="bulma.css">
 </head>
<body>
    <div class="box">
      
    <div class="o"> Register</div>
        <br>
    <form action="regis.php" method="post">
        <div class="field">
  <p class="control">
    <input class="input is-primary" type="text" placeholder="username" name="username">
  </p>
</div>
<div class="field">
  <p class="control">
    <input class="input is-info" type="password" placeholder="password" name="password" id="pass">
  </p>
</div>
<br><br>
        <input type="submit" value="accept" class="button is-warning">
        
        
        </form>
        </div>
</body>
</html>