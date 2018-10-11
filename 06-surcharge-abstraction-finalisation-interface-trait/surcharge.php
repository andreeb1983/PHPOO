<?php

// Surcharge (Override) : C'est l'idée de modifier en partie le comportement d'une méthode héritée.
// surcharge != redéfinition

class A 
{
    public function calcul() {
        return 10;
    }
}

class B extends A   // hérite de A
{
    public function calcul() {
        // return 15;
        //return $this -> calcul() + 5; // Impossible car recursif
        return parent::calcul() + 5;    // OK, permet d'appeler le comportement de la méthode calcul() telle que définie dans le classe parente.
    }
}
//-----------
$b = new B;
echo $b -> calcul();

/*
Commentaires :
    - La surcharge est une notion importante car elle permet de modifier le comportement d'une fonction héritée. Exemple : On souhaite modifier le comportement d'une fonction déclarée dans le coeur de l'application sans avoir à "toucher" au coeur  de l'application directement.
*/