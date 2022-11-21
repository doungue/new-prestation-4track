<?php
$dsn = "mysql:host = localhost; dbname=chats";
$usernam = "root";
$pass = "";


try{
    $conn = new PDO ($dsn, $usernam , $pass);
}catch(PDOexception $e){
    echo "connection echoué";
}
?>