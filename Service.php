<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['type']) && isset($_SESSION['pp'])) {
 ?>


<?php
 require('header.php');
?>

<?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");
$id_client = mysqli_real_escape_string($mysqli, $_SESSION['type']);
// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
if($id_client === 'Client'){?>
    <div class="continair-formulaire">
        <div class="list-form">
        <?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");
$id_user = mysqli_real_escape_string($mysqli, $_SESSION['id']);
// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id_user=$id_user  ORDER BY  id DESC");
?>



			
			<?php

			while ($res = mysqli_fetch_array($result)) { ?>
   


<div class="card mt-5 w-60 w-70 mb-5">
      
<div class="container-cart">
        <div class="cart"><img class="img-profile" src="image/<?php echo $res["gambar"]?>"></div>
        <div class="cart-details">
            <h3><?php echo $res['nama']?></h3>
            <h3><?php echo $res['service']?></h3>
            <div class="name">
            <h3><?php echo $res['lieu']?></h3>
            <h3><?php echo $res['pays']?></h3>
            </div>
            <div class="name">
            <h3><?php echo  $res['umur'] ?></h3>
            <h3><?php echo $res['site']?></h3>
            <h3><?php echo $res['email']?></h3>
            </div>
            <h3><?php echo $res['details']?></h3>
            <h3><?php echo $res['date']?></h3>

            <div class="name mb-3 m-3">
            <a href="edit.php?id=<?=$res['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="delete.php?id=<?=$res['id']; ?>" class="btn btn-danger" onClick="return confirm('voulez vous vraiment suppprimer ce service ?')">Delete</a>
            </div>

        </div>
            </div>

            </div>
			
                <?php } ?>
			
		
        </div>


        <div class="formulaire">
        <form
      action="add.php"
      method="post"
      name="form1"
      enctype="multipart/form-data"
    >
    
         <div class="titre-ajoute">Poster une Annonce</div>
         <div class="mb-3 mt-3 m-3">
          <div class="name">
          <input type="text" placeholder="Nom" class="form-control" name="nama" />
        
          
          <input type="text" placeholder="Telephone"  class="form-control" name="umur" />
          </div>
         </div>
          
          <div class="mb-3 m-3">
          <input type="text" placeholder="Email"  class="form-control" name="email" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Lieu"  class="form-control" name="lieu" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Pays"  class="form-control" name="pays" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Site"  class="form-control" name="site" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Service"  class="form-control" name="service" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Nom du Domaine"  class="form-control" name="domaine" />
          </div>

          <div class="mb-3 m-3">
          <textarea type="text" placeholder="Details"  class="form-control" name="details"></textarea>
          </div>
         
          <div class="mb-3 m-3">
          <input type="file" placeholder="profile"  class="form-control" name="gambar" />
          </div>
          
          <div class="mb-3 m-3">
          <input type="submit"  class="m-2 btn btn-primary" name="Submit" value="Poster" />
          </div>
      
    </form>
        </div>
    </div>

<?php } else{?>
    <div class="continair-formulaire">
        <div class="list-form">
        <?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");
$id_user = mysqli_real_escape_string($mysqli, $_SESSION['id']);
// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id_user=$id_user ORDER BY  id DESC");
?>



			
			<?php

			while ($res = mysqli_fetch_array($result)) { ?>
   


<div class="card mt-5 w-60 w-70 mb-5">
      
<div class="container-cart">
        <div class="cart"><img class="img-profile" src="image/<?php echo $res["gambar"]?>"></div>
        <div class="cart-details">
            <h3><?php echo $res['nama']?></h3>
            <h3><?php echo $res['service']?></h3>
            <div class="name">
            <h3><?php echo $res['lieu']?></h3>
            <h3><?php echo $res['pays']?></h3>
            </div>
            <div class="name">
            <h3><?php echo  $res['umur'] ?></h3>
            <h3><?php echo $res['site']?></h3>
            <h3><?php echo $res['email']?></h3>
            </div>
            <h3><?php echo $res['details']?></h3>
            <h3><?php echo $res['date']?></h3>

            <div class="name mb-3 m-3">
            <a href="edit.php?id=<?=$res['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="delete.php?id=<?=$res['id']; ?>" class="btn btn-danger" onClick="return confirm('voulez vous vraiment suppprimer ce service ?')">Delete</a>
            </div>

        </div>
            </div>

            </div>
			
                <?php } ?>
			
		
        </div>


        <div class="formulaire">
        <form
      action="add.php"
      method="post"
      name="form1"
      enctype="multipart/form-data"
    >
    
         <div class="titre-ajoute">Ajouter un Service</div>
         <div class="mb-3 mt-3 m-3">
          <div class="name">
          <input type="text" placeholder="Nom" class="form-control" name="nama" />
        
          
          <input type="text" placeholder="Telephone"  class="form-control" name="umur" />
          </div>
         </div>
          
          <div class="mb-3 m-3">
          <input type="text" placeholder="Email"  class="form-control" name="email" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Lieu"  class="form-control" name="lieu" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Pays"  class="form-control" name="pays" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Site"  class="form-control" name="site" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Service"  class="form-control" name="service" />
          </div>

          <div class="mb-3 m-3">
          <input type="text" placeholder="Nom du Domaine"  class="form-control" name="domaine" />
          </div>

          <div class="mb-3 m-3">
          <textarea type="text" placeholder="Details"  class="form-control" name="details"></textarea>
          </div>
         
          <div class="mb-3 m-3">
          <input type="file" placeholder="profile"  class="form-control" name="gambar" />
          </div>
          
          <div class="mb-3 m-3">
          <input type="submit"  class="m-2 btn btn-primary" name="Submit" value="Ajouter" />
          </div>
      
    </form>
        </div>
    </div>

      
<?php }
?>

       
   
       

          <!-- Footer  -->
<?php 
 require('footer.php');
?>

<?php }else {
	header("Location: login.php");
	exit;
} ?>