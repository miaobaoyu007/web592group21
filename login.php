<?php
session_start (); 
$pdo = new PDO("mysql:host=localhost;dbname=shop", "root" );
$pdo->setAttribute( PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );

$stmt = $pdo->prepare("SELECT * FROM register WHERE username = ? AND password = ?"); 
$stmt->bindValue(1, $_POST["username"]); 
$stmt->bindValue(2, $_POST["password"]); 
$stmt->execute(); $row = $stmt->fetch();

if ($row) {
$_SESSION["username"] = $row["username"]; 
header ( "location: index2.php " );
} else { 
header ( "location: login.php?error = 1 " ); }
?>