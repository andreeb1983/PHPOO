<?php

// Attention : les traits existent depuis PHP5.4 

trait TPanier 
{
    public $nbProduit = 1;

    public function affichagePanier() {
        return 'Affichage du panier';
    }
}
//------
trait TMembre
{
    public function connexion() {
        return 'Je me connecte';
    }
}

//------
class Site {
    use TPanier;
    use TMembre;
    // use TPanier, TMembre;
    // use permet d'importer le code contenu dans un trait
}

$site = new Site;
echo $site -> affichagePanier() . '<br/>';
echo $site -> connexion();


/*
Commentaires :
    - les traits permettent d'importer du code dans une classe
    - cela repousse l'héritage non multipledu PHP
    - une classe peut importer plusieurs traits
    - un trait peut importer un trait.
*/