<?php

// Arborescence : 
	//MVC (Model : SQL // View : HTML-CSS // Controller : PHP)
		//model
			//produit.php
			//connexion_bdd.php
		//controller
			//produit.php
		//view
			//boutique.php
			//fiche_produit.php
			//css/js/fonts
		//index.php

// En procédural normal : 
//www.monsite.com/boutique.php
//www.monsite.com/inscription.php

// MVC procédural
//www.monsite.com/index.php?controller=produit&action=afficheall
//www.monsite.com/index.php?controller=produit&action=affiche&id=12
//www.monsite.com/index.php?controller=membre&action=inscription

//www.monsite.com/produit/afficheall
//www.monsite.com/produit/affiche/12
//www.monsite.com/membre/inscription

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
   
	<title>Ma Boutique</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <!-- La marque -->
       <a class="navbar-brand" href="<?php echo RACINE_SITE . 'boutique.php'; ?>">MA BOUTIQUE</a>
       
        <!-- Le burger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <!-- Le menu -->
        <div class="collapse navbar-collapse" id="nav1">
	<ul class="navbar-nav ml-auto">
	<?php
        echo '<li><a class="nav-link" href="boutique.php">Boutique</a></li>';
		echo '<li><a class="nav-link" href="panier.php">Panier</a></li>';

        // menu si internaute connecté :
       
            echo '<li><a class="nav-link" href="profil.php">Profil</a></li>';
            echo '<li><a class="nav-link" href="connexion.php?action=deconnexion">Se déconnecter</a></li>';
         // si il n'est pas connecté
            echo '<li><a class="nav-link" href="inscription.php">Inscription</a></li>';
            echo '<li><a class="nav-link" href="connexion.php">Connexion</a></li>';
           

        // menu si internaute est un admin :
       
            echo '<li><a class="nav-link" href="admin/gestion_boutique.php"> Gestion de la boutique</a></li>';
            echo '<li><a class="nav-link" href="admin/gestion_membre.php"> Gestion des membres</a></li>';
        
        	?>
        	</ul>
        </div>
      </div>
    </nav>

   
    <!-- Page Content -->
    <div class="container" style="min-height: 80vh;">
        <!-- ici nous aurons le contenu spécifique de notre page -->


		<?php 
			

			if(!isset($_GET['controller'])){
				$controller = 'produit';
				$action = "afficheall";
			}
			else{
				$controller = $_GET['controller'];
				$action = $_GET['action'];	
			}
			
			require 'controller/' . $controller . '.php';	
			
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$action($id); 
			}
			else{
				$action(); 
			}
			
			//12-MVC/?controller=produit&action=afficheall
			//12-MVC/?controller=produit&action=affiche&id=5
			
		?>
		
		
		
		
	</div><!-- fin .container -->


    <!-- footer -->
    <div class="container">
        <hr>
        <footer>
           <div class="row">
               <div class="col-lg-12">
                    <p>Copyright &copy; Ma Boutique - 2018</p>                   
               </div> 
           </div>
        </footer>
    </div>
    <!-- fin footer -->

</body>
</html>	
		
		
		
