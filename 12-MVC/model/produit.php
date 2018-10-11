<?php

// Le model produit
// Ce fichier a pour mission de gérer toutes les interaction avec la BDD et précisement la table Produit

require 'connexion_bdd.php'; // Pour que la connexion à la BDD soit disponible ici.

function getAllProduit(){
	global $pdo; // pour récupérer $pdo dans la fonction
	$resultat = $pdo -> query("SELECT * FROM produit");
	$produits = $resultat -> fetchAll(PDO::FETCH_ASSOC);
	return $produits;
}

function getProduitById($id){
	global $pdo; // pour récupérer $pdo dans la fonction
	$resultat = $pdo -> prepare("SELECT * FROM produit WHERE id_produit = :id");
	$resultat -> bindParam(':id', $id, PDO::PARAM_INT);
	
	if($resultat -> execute()){
		$produit = $resultat -> fetch(PDO::FETCH_ASSOC);
		return $produit;
	}
}

function getAllCategory(){
	global $pdo;
	$resultat = $pdo -> query("SELECT DISTINCT categorie FROM produit");
	$categories = $resultat -> fetchAll();
	return $categories;
}


function getProduitByCat($categorie){
	global $pdo;
	$resultat = $pdo -> query("SELECT * FROM produit WHERE categorie = '$categorie'");
	return $resultat -> fetchAll();
}






