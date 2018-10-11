<?php

//src/Controller/ProduitController.php

namespace Controller;

class ProduitController extends Controller
{

    public function afficheall() {
        // 1/ je récupère les infos dont j'ai besoin:
        $produits = $this -> getRepository() -> getAllProduit();
        $categories = $this -> getRepository() -> getAllCategorie();

        // 2/ j"envoie la vue correspondante
        //require __DIR__ . '/../View/Produit/boutique.php';

        $params = array(
            'produits'   => $produits,
            'categories' => $categories
        );
        
        return $this -> render('layout.html', 'boutique.html', $params);
    }


    public function affiche($id) {
        // 1/ Je récupère ce dont j'ai besoin
        $produit = $this -> getRepository() -> getProduitById($id);
        $suggestions = $this -> getRepository() -> getAllSuggestions($produit);

        // 2/ Retourner la vue qui correspond
        $params = array(
            'produit' => $produit,
            'suggestions' => $suggestions
        );

        return $this -> render('layout.html', 'fiche_produit.html', $params);

    }


    public function categorie($cat) {

        // web/produit/categorie/{nom_categorie}
        // 1/ je récupère les infos dont j'ai besoin:
        $produits = $this -> getRepository() -> getAllProduitByCategorie($cat);
        $categories = $this -> getRepository() -> getAllCategorie();

        $params = array(
            'produits'   => $produits,
            'categories' => $categories
        );

        return $this -> render('layout.html', 'boutique.html', $params);

    }
    
}