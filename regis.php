<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop", "root" );
$pdo->setAttribute( PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );

$name = $_POST["username"]; 
$pass = $_POST["password"];  
$pdo->query("INSERT INTO register VALUES ('','$name', '$pass')");

header("location:index.php"); 

?>