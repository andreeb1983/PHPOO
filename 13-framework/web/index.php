<?php
session_start(); 

require_once(__DIR__ . '/../vendor/autoload.php');

$app = new Manager\Application;
$app -> run();

// index.php/       produit     /       afficheall
// index.php/       produit     /       affiche          /   9 
// index.php/       produit     /       categorie       /   pull


// www.monsite.com/produit/afficheall

// echo 'Bonjour';




































// TEST 1 : Entity
// $produit = new Entity\Produit;
// $produit -> setTitre('Mon super Produit');
// echo $produit -> getTitre();

// $membre = new Entity\Membre;
// $membre -> setPseudo('Yakine');
// echo '<br/>' . $membre -> getPseudo();

// TEST 2 : PDOManager;
// $pdo = Manager\PDOManager::getInstance() -> getPdo();
// $resultat = $pdo -> query("SELECT * FROM produit");
// $produits = $resultat -> fetchAll();
// echo '<pre>'; 
// print_r($produits);
// echo '</pre>'; 

// TEST 3 : EntityRepository
// ATTENTION ! : Pour tester ce fichier , il faut simuler que l'on soit dans une entité particulière en précisant 'returne Produit'(par exemple), dan sla fonction getTableName();.
// Pour la suite on va remettre la fonction dans son état initial.

// $er = new Repository\EntityRepository;

// $produits = $er -> findAll();
// $pdt = $er -> find(8);

// $newPdt = array(
//     'id_produit' => 20,
//     'reference' => '456',
//     'categorie' => 'pull',
//     'titre' => 'nouveau pull',
//     'description' => 'pull doux et chaud',
//     'public' => 'f',
//     'taille' => 'L',
//     'couleur' => 'noir',
//     'prix' => 59,
//     'stock' => 150,
// );

// $er -> register($newPdt);
// //$er -> delete(20);
// $er -> update(11, $info);
// $produits = $er -> findAll();

 

// echo '<pre>';
// print_r($produits);
// print_r($pdt);
// print_r($newPdt);
// echo '</pre>';

// Test 4 : ProduitRepository

// $pr = new Repository\ProduitRepository;

// $produits = $pr -> getAllProduit();
// $pdt = $pr -> getProduitById(9);

// $categories = $pr -> getAllCategorie();
// $produit_cat = $pr -> getAllProduitByCategorie('robe');

// echo '<pre>';
// print_r($produits);
// print_r($pdt);
// print_r($categories);
// print_r($produit_cat);
// echo '</pre>';

// Test 5 : ProduitController

// $pc = new Controller\ProduitController;
// //$pc -> afficheall();
// $pc -> affiche(9);