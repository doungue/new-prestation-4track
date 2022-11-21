<?php
 session_start();
 if(isset($_SESSION['username'])){
  require('connection.php'); 
  require('user.php');
  $_SESSION['username'];
  $user = getUser($_SESSION['username'], $conn);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style12.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='container-header'>
            <div class='details'> 
              <h3>(+237691041322)</h3>
              <h3>4tec@gmail.com</h3>
            </div>
            <div class='details'>
               <h3>(+237691041322)</h3>
               <h3>(+237691041322)</h3>
            </div>
        </div> 

        <div class='container-navbar'>
            <div class='details'>
                <img src="img/log.png" class="logo" alt=''/>
            </div>
            <div class='details'>
                <ul>
                    
                       <a href="index.php" class="a"> <li>Acceuille</li></a>
                       <a href="Service.php" class="a"> <li>Service</li></a>
                       <a href="logout.php" class="a"><li>Deconnecter</li></a>                                              

                </ul>
            </div>
        </div>




        <!-- Footer  -->

        <div class='container-footer'>
            <div class='footer-details'>
                <h1 class='titre'>Apropos</h1>
                <h2 class='blog'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero ipsa molestiae. Enim doloribus officiis rem et alias. Alias impedit similique placeat voluptates eius quam asperiores, sequi laboriosam velit voluptate.</h2>
            </div>
            <div class='footer-details'>
            <h1 class='titre'>Service</h1>
            <h2 class='blog'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero ipsa molestiae. Enim doloribus officiis rem et alias. Alias impedit similique placeat voluptates eius quam asperiores, sequi laboriosam velit voluptate.</h2>
            </div>
            <div class='footer-details'>
            <h1 class='titre'>Contact</h1>
            <h2 class='blog'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero ipsa molestiae. Enim doloribus officiis rem et alias. Alias impedit similique placeat voluptates eius quam asperiores, sequi laboriosam velit voluptate.</h2>
            </div>
        </div>
</body>
</html>

    
<?php } else{
    header("location:index.php");
    exit;
}

?>