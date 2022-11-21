<?php
require('connection.php');

if(isset($_POST['username']) && isset($_POST['telephone']) && isset($_POST['password'])){
      
$username = $_POST['username'];
$telephone = $_POST['telephone'];
$password =$_POST['password'];

$req = "INSERT INTO users (username, telephone, password) VALUES(:username, :telephone, :password)";
$stmt = $conn->prepare($req);
if($stmt->execute([':username'=>$username, ':telephone'=>$telephone, ':password'=>$password])){
    $sm = "votre compte a ete cree avec succes";
    header("location:Login.php?success=$sm");
    exit;
}else
    if(isset($_FILES['pp']['name'])){
        print_r($_FILES['pp']);
        $img_name = $_FILES['pp']['name'];
        $img_size = $_FILES['pp']['size'];
        $tmp_name = $_FILES['pp']['tmp_name'];
        $error = $_FILES['pp']['error'];
        if($error===0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);
    
            $allowed_exs = array('jpg', 'jpeg', 'png');
    
            if(in_array($img_ex_to_lc, $allowed_exs)){
              $new_img_name = uniqid($username, true).'.'.$img_ex_to_lc;
              $img_upload_path = '../upload/' .$new_img_name;
              move_uploaded_file($tmp_name, $img_upload_path);
                     
            }else{
                $em = "recommance";
                header("location:Connexion.php?error=$em");
                exit;
            }
        }else{
            $em = "recommance";
            header("location:Connexion.php?error=$em");
            exit;
        }
     }else{
        $sm = "votre compte a ete cree avec succes";
        header("location:Login.php?success=$sm");
        exit;
     }



}
else{
    $em = "recommance";
    header("location:Connexion.php?error=$em");
    exit;
}
?>


