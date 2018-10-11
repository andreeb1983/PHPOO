        <!-- Portfolio Item Row -->
        <div class="row">

			<div class="col-lg-12">
				<h1><?php echo $titre; ?></h1>
			</div>
			
	
	 		<div class="col-md-8">
                <img class="img-fluid" src="view/<?php echo $photo; ?>" alt="<?php echo $titre; ?>">
            </div>
	
			<div class="col-md-4">
				<h3>Description</h3>
				<p><?php echo $description; ?></p>
				
				<h3>Détails</h3>
				<ul>
					<li>Catégorie : <?php echo $categorie; ?> </li>
					<li>Couleur : <?php echo $couleur; ?> </li>
					<li>Taille : <?php echo $taille; ?> </li>
				</ul>
				<h4>Prix : <?php echo number_format($prix,2,',',''); ?> €</h4>
			
				<?php echo $panier; ?>
 				
				<br><a href="boutique.php?categorie=<?php echo $categorie; ?>"> Retour vers votre sélection</a>
			</div><!-- .col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>	

		
		<div class="row">
            <div class="col-lg-12">
                <h3>Suggestions de produits</h3>
            </div>

			<?php foreach($suggestions as $sug) ?>
			<div class="col-sm-3">
				<a href="">
					<img class="img-fluid" src="view/<?= $sug['photo'] ?>">
				 </a>
				<h4><?= $sug['titre'] ?></h4>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- 4 suite : ajout du JS pour afficher le popup panier : -->
		<script>
			$(function(){
				// Show the Modal on load
				$("#myModal").modal("show");
			});
		</script>



