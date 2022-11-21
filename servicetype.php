<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['type']) && isset($_SESSION['pp'])) {
 ?>


<?php 
  @$keywords = $_GET["keywords"];
  @$keywor = $_GET["keywor"];
  @$keyword = $_GET["keyword"];
  @$valider = $_GET["valider"];

  if(isset($valider) && !empty(trim($keywords)) && !empty(trim($keywor)) && !empty(trim($keyword))){
    include_once("conf.php");
    $res = $con->prepare("select * from users where service like '%$keywords%' AND lieu like '%$keyword%' AND domaine like '%$keywor%'");
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute();
    $tab= $res->fetchAll();
    $afficher="oui";
  }

?>

<?php
require('header.php');
?>

        <div class="container-search">
            <div class="search">
               <form name="fo" method="$_GET" action="">
                <div class="name m-5 ">
                 <input type="text" class="mt-4 w-25  form-control" name="keywords" value="<?php echo $keywords ?>" placeholder="Type de Service"/>
                 <input type="text" class="mt-4 w-25  form-control" name="keyword" value="<?php echo $keyword ?>" placeholder="Lieu"/>
                 <input type="text" class="mt-4 w-25  form-control" name="keywor" value="<?php echo $keywor ?>" placeholder="Domaine"/>
                 <input type="submit" class=" mt-4 btn btn-primary" name="valider" value="Recherche"/>
                </div>
                </form>
            </div>
        </div>

<!------------------recherche list------------------------------------------->
<?php if(@$afficher=="oui"){?>
        <div class="resultat">
            <div class="nbr"><?=count($tab)." ".(count($tab)>1? "résultats trouvés":"résultat trouvé") ?></div>
        </div>
            <ol>
                <?php for ($i=0; $i < count($tab) ; $i++) { ?>


                  <div class="card mt-5 w-60 w-70 mb-5">
      
      <div class="container-cart">
              <div class="cart"><img class="img-profile" src="image/<?php echo $tab[$i]["gambar"]?>"></div>
              <div class="cart-details">
                  <h3><?php echo $tab[$i]["nama"]?></h3>
                  <h3><?php echo $tab[$i]["service"]?></h3>
                  <div class="name">
                  <h3><?php echo $tab[$i]["lieu"]?></h3>
                  <h3><?php echo $tab[$i]["pays"]?></h3>
                  </div>
                  <div class="name">
                  <h3><?php echo $tab[$i]['umur'] ?></h3>
                  <h3><?php echo $tab[$i]["site"]?></h3>
                  <h3><?php echo $tab[$i]["email"]?></h3>
                  </div>
                  <h3><?php echo $tab[$i]["details"]?></h3>
                  <button type="submit" class="mvb btn btn-primary">Voir le profile</button>
                  <h3><?php echo $tab[$i]["date"]?></h3>
      
              </div>
                  </div>
      
                  </div>


                <?php } ?>
            </ol>
         <?php } else{?>
            <?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");

// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id_annonce ='Fournisseur' ORDER BY id DESC");
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
            <button type="submit" class="mvb btn btn-primary">Voir le profile</button>
            <h3><?php echo $res['date']?></h3>


            
           <div class="like btn">like</div>


        </div>
            </div>

            </div>
			
                <?php } ?>
        <?php } ?>      
<!--------------------Fin-------------------------------------->
        


          <!-- Footer  -->

         <?php 
         require('footer.php');
         ?>

<?php }else {
	header("Location: login.php");
	exit;
} ?>