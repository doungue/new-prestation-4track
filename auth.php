<?php
require('connection.php');
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
      
$username = $_POST['username'];
$password =$_POST['password'];

$req = "SELECT * FROM users WHERE username = ? AND password =?";
$stmt = $conn->prepare($req);
$stmt->execute([$username, $password]);
$user = $stmt->fetch();
if(empty($username ==$user['username'])){
    $sm = "votre username ou password est incorrect";
    header("location:Login.php?erro=$sm");
    exit;
}else if(empty($password == $user['password'])){
    $sm = "votre username ou password est incorrect";
    header("location:Login.php?erro=$sm");
    exit;
}else{
    
    $_SESSION['username'] = $user['username'];
    $_SESSION['password'] = $user['password'];
    
    header("location:Acceuille.php");
   
}

}
?>