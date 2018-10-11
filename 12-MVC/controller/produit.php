<?php

// Le controller produit
// Ce fichier a pour mission 
	// 1 : de récupérer les infos aupres du model, 
	// 2 : d'envoyer les vues. 


require __DIR__ . '/../model/produit.php'; 


function afficheall(){
	$produits = getAllProduit(); // SELECT * FROM produit
	$categories = getAllCategory(); // SELECT DISTINCT categorie FROM produit
	require __DIR__ . '/../view/boutique.php';
}


function affiche($id){
	$produit = getProduitById($id); // SELECT * FROM WHERE Id=
	$suggestions = getProduitByCat($produit['categorie']);

	extract($produit);
	require __DIR__ . '/../view/fiche_produit.php';
}

