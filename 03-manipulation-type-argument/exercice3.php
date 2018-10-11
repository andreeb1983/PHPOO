<?php

// exercice3.php
/*
CONSIGNES :
0- Créer les getters et setters
1- Création d'un véhicule
2- Attribuer un nombre de litre d'essence au véhicule (5L)
3- Afficher le nombre de litre d'essence dans le véhicule
4- La capacité max du réservoir du véhicule est de 50L (50)
5- creation d'une pompe
6- Attribuer un nombre de litre d'essence à la pompe (800L)
7- Afficher le nombre de litre d'essence dans la pompe
8- La pompe donne de l'essence au véhicule et fait le plein
9- Afficher le nombre de litre d'essence dans le véhicule après ravitaillement
10- Afficher le nombre de litre d'essence dans la pompe après ravitaillement!! Le véhicule ne peut pas recevoir plus que la capacité max de son réservoir !!
*/

class Vehicule
{
    private $litre;
    private $reservoir;

    public function setLitre($litre) {
        $this -> litre = $litre;
    }
    public function getLitre() {
        return $this -> litre;
    }


    public function setReservoir($res) {
        $this -> reservoir = $res;
    }
    public function getReservoir() {
        return $this -> reservoir;
    }
}



class Pompe
{
    private $litre;

    public function setLitre($litre) {
        $this -> litre = $litre;
    }
    public function getLitre() {
        return $this -> litre;
    }

    public function donneEssence(Vehicule $v) {
        // modifier l'objet pompe ($this)
        // Le volume de litre dans pompe doit être égale à l'ancien volume moins (le réservoir de $v moins le nombre de litre de $v)
        $this -> setLitre($this -> getLitre()-($v -> getReservoir()-$v -> getLitre()));
        // 745 = 800 - (50 - 5)

        // modifier l'objet vehicule ($v)
        // Le volume de $v doit être égale à la capacité du réservoir de $v
        $v -> setLitre($v -> getReservoir());
        //50 = 5 + (50 -5)
        //50 = 50

    }
}


$clio = new Vehicule;

$clio -> setLitre(5);
echo 'Nombre de litres d\'essence du véhicule : '. $clio -> getLitre(). ' litres.<br/>';

$clio -> setReservoir(50);
echo 'Votre véhicule peut contenir ' . $clio -> getReservoir(). ' litres.<br/>';

//-----

$p = new Pompe;
$p -> setLitre(800);

echo 'Nombre de litres d\'essence à la pompe : ' . $p -> getLitre() . 'litres.<hr/>';

//-----

$p -> donneEssence($clio);

echo 'Après ravitaillement <br/>';
echo 'Votre véhicule peut contenir ' . $clio -> getReservoir(). ' litres.<br/>';
echo 'Nombre de litres d\'essence à la pompe : ' . $p -> getLitre() . 'litres.<hr/>';

