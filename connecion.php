<?php 
$dsn = "mysql:host=localhost; dbname=login";
$username = "root";
$password = "";
 try{
     $con=new PDO ($dsn, $username, $password);
 }catch(PDOexception $e){
     echo "connection echoué:" . $e->getMessage();
 }