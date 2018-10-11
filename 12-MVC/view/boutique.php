<h1 class="mt-4">Vêtements</h1>

<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="" class="list-group-item">Tous</a>
			
			<?php foreach($categories as $cat): ?>
			<a href="" class="list-group-item"><?php echo $cat['categorie'] ?></a>
			<?php endforeach; ?>
			
			
		</div>
	</div>
	
	<div class="col-md-9">
		<div class="row">
			
			<?php foreach($produits as $pdt) : ?>
			<div class="col-sm-4 mb-4">	
				<div class="card">
					<a href=""><img class="card-img-top" src="view/<?= $pdt['photo'] ?>" alt=""></a>
					<div class="card-body">
						<h4><?= $pdt['titre'] ?></h4>
						<h5><?= $pdt['prix'] ?>€</h5>
						<p><?= $pdt['description'] ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			
			
		</div>
	</div>
</div>