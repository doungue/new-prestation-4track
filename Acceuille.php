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
 
        <!-- Maps   -->
        <div class='container-map'>
        <div class='map'>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=c&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
        </div>


        
       <div class="serc">
        <div class="container-search">
            <div class="search">
               <form name="fo" method="$_GET" action="Annonce.php">
                <div class="name m-5 ">
                 <input type="text" class="mt-4 w-25  form-control" name="keywords" value="<?php echo $keywords ?>" placeholder="Type de Service"/>
                 <input type="text" class="mt-4 w-25  form-control" name="keyword" value="<?php echo $keyword ?>" placeholder="Lieu"/>
                 <input type="text" class="mt-4 w-25  form-control" name="keywor" value="<?php echo $keywor ?>" placeholder="Domaine"/> 
                 <input type="submit" class=" mt-4 btn btn-primary" name="valider" value="Recherche"/>
                </div>
                </form>
            </div>
        </div>
       </div>

        <div class='tec'>
          <img src="img/log.png" class='log'/>
          <h5>COMMENT 4TEC FONCTIONNE ?</h5></div>

      
          <div class='container-tec'>
<!----------------------------------------blog1 SERVICE----------------->


          <div class="container-infos">
           <div class="info-titre"><h3>A LA RECHERCHE D'UNE PERSONNE QUALIFIEE ?</h3></div>

           <div class="info-details">


           <div class="infos">
            <div class="info-blog">
              <div class="ronde"><h3>1</h3></div>
              <div class="tirets"></div>
            </div>
            <div class="info-blog1">
              <div class="titre-infos"><h3>INSCRIVEZ VOUS GRATUITEMENT</h3></div>
              <div class="container-info-details">
                <div class="img-info"><img src="img/téléchargement.png" class="lo"></div>
                <div class="img-details-info"><h3>Inscrivez-vous gratuitement en spécifiant l'adresse ou vous exercez votre activité ensuite, connectez-vous pour completer votre profil.</h3></div>
              </div>
            </div>
           </div>


           <div class="infos">
            <div class="info-blog">
              <div class="ronde"><h3>2</h3></div>
              <div class="tirets"></div>
            </div>
            <div class="info-blog1">
              <div class="titre-infos"><h3>AJUSTEZ VOTRE PROFIL</h3></div>
              <div class="container-info-details">
                <div class="img-info"><img src="img/istockphoto-974683580-612x612.jpg" class="lo"></div>
                <div class="img-details-info"><h3>Penez la peine d'entre tout les mots clés qui se rapporte a votre activité pour permettre aux clients de vous trouver dans la barre de recherche.</h3></div>
              </div>
            </div>
           </div>
           

           <div class="infos">
            <div class="info-blog">
              <div class="ronde"><h3>3</h3></div>
              <div class="tirets"></div>
            </div>
            <div class="info-blog1">
              <div class="titre-infos"><h3>BIENVENUE SUR 4TEC</h3></div>
              <div class="container-info-details">
                <div class="img-info"><img src="img/log.png" class="lo"></div>
                <div class="img-details-info"><h3>Maintenant que vous êtes devenu un fournisseur de service sur 4TEC, les clients peuvent vous contactez à tout monment.</h3></div>
              </div>
            </div>
           </div>

              
            </div>
          </div>


            

<!----------------------------------------blog2 SERVICE----------------->

<div class="container-infos">
           <div class="info-titre"><h3>VOULEZ VOUS DEVENIR UN FOURNISSEUR DE SERVICE ?</h3></div>

           <div class="info-details">


           <div class="infos">
            <div class="info-blog">
              <div class="ronde"><h3>1</h3></div>
              <div class="tirets"></div>
            </div>
            <div class="info-blog1">
              <div class="titre-infos"><h3>DECRIVEZ LE SERVICE DONT VOUS AVEZ BESOIN</h3></div>
              <div class="container-info-details">
                <div class="img-info"><img src="img/Letter-to-the-Editor.jpg" class="lo"></div>
                <div class="img-details-info"><h3>Entrez dans la barre de recherche les mots clés qui décrivent le mieux le service dont vous avez besoin, pour que 4TEC présente la liste des fournisseurs de ce service.</h3></div>
              </div>
            </div>
           </div>


           <div class="infos">
            <div class="info-blog">
              <div class="ronde"><h3>2</h3></div>
              <div class="tirets"></div>
            </div>
            <div class="info-blog1">
              <div class="titre-infos"><h3>AFFINER VOTRE RECHERCHE SI NECESSAIRE</h3></div>
              <div class="container-info-details">
                <div class="img-info"><img src="img/images.jpg" class="lo"></div>
                <div class="img-details-info"><h3>Sélectionner la catégorie de service, le pays et la ville dans lequels vous souhaitez localiser un fournisseur.</h3></div>
              </div>
            </div>
           </div>
           

           <div class="infos">
            <div class="info-blog">
              <div class="ronde"><h3>3</h3></div>
              <div class="tirets"></div>
            </div>
            <div class="info-blog1">
              <div class="titre-infos"><h3>SELECTIONNER UN FOURNISSEUR</h3></div>
              <div class="container-info-details">
                <div class="img-info"><img src="img/images (1).jpg" class="lo"></div>
                <div class="img-details-info"><h3>Sélectionner un fournisseur et contactez-le pour qu'il puisse vous rendre le service que vous voulez.</h3></div>
              </div>
            </div>
           </div>

              
            </div>
          </div>

<!----------------------------------------fin SERVICE----------------->


          
        </div>
        </div>
     
      </div>



      

        <!-- Footer  -->

       <?php 
       require('footer.php');
       ?>

<?php }else {
	header("Location: login.php");
	exit;
} ?>