<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='container-header'>
            <div class='details'> 
              <h3><img class="loga" src="img/icons8_phone_filled.ico">(+237691041322)</h3>
              <h3><img class="loga" src="img/icons8_message_filled.ico">4tec@gmail.com</h3>
            </div>
            <div class='detaills'>
               <h3><img class="logas" src="img/icons8_facebook.ico"></h3>
               <h3><img class="loga" src="img/icons8_instagram_new.ico"></h3>
               <h3><img class="loga" src="img/icons8_twitter.ico"></h3>
               <h3><img class="logas" src="img/icons8_whatsapp.ico"></h3>
               
            </div>
        </div> 

        <div class='container-navbar'>
            <div class='details'>
                <img src="img/log.png" class="logo" alt=''/>
            </div>
            <div class='detaills'>
                <ul>
                    
                       <a href="Acceuille.php" class="a"> <li>Home</li></a>
                       <a href="Annonce.php" class="a"> <li>Annonce</li></a>
                       <a href="servicetype.php" class="a"> <li>Recherche</li></a>

                       <?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");
$id_client = mysqli_real_escape_string($mysqli, $_SESSION['type']);
// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
if($id_client === 'Client'){?>
     <a href="Service.php" class="a"> <li>Poster</li></a>
<?php } else{?>
     <a href="Service.php" class="a"> <li>Service</li></a>
<?php }?>

                      
                        <li class="a"> <div class="enfant21"><img src="" class="loupe">
    <style type="text/css">


i {
color: gray;
font-size: 20px !important;
/* 24px preferred icon size */
}

a {
text-decoration: none;
}

#btn {
display: none;
}

.button-parent {
display: flex;
margin-left:-4px;
margin-top:-42px;

}

.button {

width: 45px;
height: 30px;
display: block;
margin: 0px;
cursor:pointer;
background-color: red;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
color: black;
margin-top:20px;
margin-left: 5px;


}


/* link and link-parent */

.link-parent {
display: none;
justify-content: center;
align-items: center;
transition: all .5s;
}

.link-item {
top:-900px;
background-color: gray; 
display: block;
width: 100px;
height: 45px;
border-radius: 5px;
left: -900px;
transform: translatex(20px);
display: flex;
justify-content: center;
align-items: center;

}


/* control click */

#btn:checked~.link-parent {
display: flex;
flex-direction:column;
}


/* animation */



#link-one {
margin-left:-109px;
margin-top: 67px;
}




.btn1{
width: 50px; 
background-color: gray;
margin: 0px;
border-radius:20px;
margin-top:-20px;
}

.sidebar{
position:fixed;
width:100%;
height:100%;
background:white;
}

.dec1{
width: 100%; 
background-color: gray;
height: 100%;

}


.button.click{
left:256px;
}

.w-3{
    width: 100%;
    height: 100%;
}


</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class='button-parent'>
<input type="checkbox" id='btn'>
<label for="btn" class='button'>
  <i class="material-icons"><img src="upload/<?=$_SESSION['pp']?>"  class="w-10"></i>

</label>

<div class="link-parent">
<div class='link-item' id='link-one'>
<nav class="sidebar">
<div class="dec1"><a href="logout.php" class="btn btn-primary w-3">Logout</a></div>
</nav>
<div class="label-container">

<i class="material-icons"></i>
</div>
</div>
</div>
</div>

    
    </div>
    
    </li>
                       

		  
		  </div></li></a>
                       
                </ul>
            </div>
        </div>


        

    