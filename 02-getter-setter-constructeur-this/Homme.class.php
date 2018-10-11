<?php
// 02-getter-setter-constructeur-this

class Homme
{
    private $prenom;
    private $nom;

    public function setPrenom($argument) {
        if(is_string($argument)) {
            if(strlen($argument) > 5 && strlen($argument) <30
            ){
                $this -> prenom = $argument;
            }
        }           
    }
    public function getPrenom() {
        return $this -> prenom;
    }



    public function setNom($nom) {
         $this -> nom = $nom;          
    }
    public function getNom() {
        return $this -> nom;
    }
}

//----
$homme = new Homme;
//$homme -> prenom = 'Laurent';   // Erreur  : impossible d'accéder à un élément private depuis l'extérieur de la classe; 

$homme -> setPrenom('Laurent');
$homme -> setNom('DUPONT');

echo 'Bonjour ' . $homme -> getPrenom() . '! <br/>';
echo 'Nom : ' . $homme -> getNom() . '<br/>';

echo 'Bonjour ' . $homme -> getPrenom() .' '. $homme -> getNom(). '! <br/>';


/*
Commentaires :
    - Pourquoi faire des getters et des setters ?
    Le PHP est un langage qui ne type pas ses variables... Il faut donc constamment vérifier l'intégrité des données. Mettre une propriété en visibilité private, et donc passer par les accesseurs(getter/setter), permet de vérifier à un sel endroit (une seule fois) les données. C'EST UNE BONNE CONTRAINTE !! 
    Tout développeur qui voudra affecter une valeur devra passer par le setter.

    $this : représents l'OBJET en cours de manipulation
    
    Getter : Accéder
    Setter : Affecter

    Nous aurons autant de getter et setter que de propriétés PRIVATE.
*/

