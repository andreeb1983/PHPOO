<?php

// Consignes : Au regard de la classe ci-dessous, veuillez affecter une valeur à prenom en n'intervenant UNIQUEMENT à l'intérieur de la classe !!

class Etudiant 
{
    private $prenom;

    public function __construct($prenom) {
        //$this -> prenom = $prenom;
        $this -> sertPrenom($prenom);
    }

    public function sertPrenom($prenom) {
        $this -> prenom = $prenom;
    }
    public function getPrenom() {
        return $this -> prenom;
    }
}

//---------
$etudiant = new Etudiant('Laurent');
echo 'Prénom : ' . $etudiant -> getPrenom();


/*
Commentaires :
    - La méthode magique __construct() s'exécute automatiquement au moment de l'instanciation.
    - Il n'est pas obligatoire de la déclarer. En théorie on ne la déclare que si on en a besoin.
    - Elle prend en argument les informations déclarées dans les parenthèses au moment de l'instanciation ($etudiant = new Etudiant('Laurent'))
*/
