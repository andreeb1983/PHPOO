<?php

class Maison
{

    public $couleur = 'blanc';  // appartient à l'objet
    public static $espaceTerrain = '500m²'; // appartient à la classe
    private $nbPorte = 10;  //l'objet($maison)
    private static $nbPiece = 7;   // appartient à la classe
    const HAUTEUR = '10m';

    public function getNbPorte() {
        return $this -> nbPorte;
    }

    public static function getNbPiece() {
        return Maison::$nbPiece;
        return self::$nbPiece;
    }

}
//-----
echo 'Terrain : '. Maison::$espaceTerrain . '<br/>';   // OK, je fais appelle à un élément de la classe via le nom de la classe.


$maison = new Maison;
echo 'Couleur : ' . $maison -> couleur . '<br/>';   //OK, j'accède à un élément public à l'extérieur de la classe

//echo 'Terrain : ' . $maison -> espaceTerrain . '<br/>';

//echo 'Portes : '. $maison -> nbPorte . '<br/>'; // erreur, accessible uniquement dans la classe (getter)
echo 'Portes : ' . $maison ->getNbPorte() . '<br/>';     // OK, j'accède à un élément private en dehors de la classe grâce à son élément getter.

//echo 'Pièces : ' . Maison::$nbPiece() . '<br/>'; // erreur : private
echo 'Pièces : ' . Maison::getNbPiece() . '<br/>';   //OK
echo 'Hauteur : ' . Maison::HAUTEUR . '<br/>';  // OK,

/*
Commentaires :

    Opérateurs:
        - $objet -> :   Elément d'un objet à l'extérieur de la classe
        - $this ->  :   Elément d'un objet à l'intérieur de la classe
        - Class::   :   Elément d'une class (static, const) à l'extérieur de la classe
        -self::     :   Element d'une class (static, const) à l'intérieur de la classe

    2 questions à se poser :
        - Est-ce static ?
            - oui :
                - Suis-je à l'intérieur de la classe ?
                    ---> oui : self::
                    --->non : Class::
            
            - non :
                 - Suis-je à l'intérieur de la classe ?
                    ---> oui : $this ->
                    --->non : $objet ->
    Static signifie qu'un élément (propriété ou méthode) appartient à la Classe. On y accède donc avec Class:: ou self::. Un élément static peut être modifié, mais le sera de manière durable.

    const signifie qu'un élément (propriété) appartient à la classe, mais ne peut pas être modifié.
    
*/