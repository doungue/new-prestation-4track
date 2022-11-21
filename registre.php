<?php
 require('connecion.php');

 
    if(isset($_POST['nom']) && isset($_POST['service']) && isset($_POST['lieu']) && isset($_POST['site']) && isset($_POST['pays']) && isset($_POST['telephone']) && isset($_POST['details'])){
        $nom = $_POST['nom'];
        $lieu = $_POST['lieu'];
        $site = $_POST['site'];
        $pays = $_POST['pays'];
        $telephone = $_POST['telephone'];
        $details = $_POST['details'];
        $service = $_POST['service'];
        
        if(isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])){
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
              $new_img_name = uniqid($service, true).'.'.$img_ex_to_lc;
              $img_upload_path = '../upload/' .$new_img_name;
              move_uploaded_file($tmp_name, $img_upload_path);
                   
			  $sql = "INSERT INTO users(nom, service, lieu, telephone, pays, site, details, pp) 
			  VALUES(?,?,?,?,?,?,?,?)";
	  $stmt = $con->prepare($sql);
	  $stmt->execute([$nom, $service, $lieu, $telephone, $pays, $site, $details, $new_img_name]);

	  header("Location: ../Service.php?success=Your account has been created successfully");
	  exit;
            }else{
                $em = "recommance";
                header("Location: ../Service.php?error=$em&$data");
	            exit;
            }
        }else{
            $em = "recommance";
			header("Location: ../Service.php?error=$em&$data");
			exit;
        }
		}else{
    	$sql = "INSERT INTO users(nom, service, lieu, telephone, pays, site, details) 
    	        VALUES(?,?,?,?,?,?,?)";
    	$stmt = $con->prepare($sql);
    	$stmt->execute([$nom, $service, $lieu, $telephone, $pays, $site, $details]);

    	header("Location: ../Service.php?success=Your account has been created successfully");
	    exit;
    }
        
        //insertion dans la bd

       
    }

        $res = "SELECT * FROM users";
        $stat = $con->prepare($res);
        $stat->execute();
        $user = $stat->fetchALL(PDO::FETCH_OBJ);
    


?>