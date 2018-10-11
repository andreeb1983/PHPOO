<?php

abstract class Joueur 
{
    public function inscription() {
        return $this -> etreMajeur();
    }
    abstract public function etreMajeur();
}
//-------
class JoueurFr extends Joueur
{
    public function etreMajeur() {
        return 18;
    }
}
//-------
class JoueurUs extends Joueur
{
    public function etreMajeur() {
        return 21;
    }
}
//-------
$joueurFr = new JoueurFr;
echo $joueurFr -> inscription() . '<hr/>'; // retourne 18

$joueurUs = new JoueurUs;
echo $joueurUs -> inscription(); // retourne 21


/*
Commentaires :
    - Une classe abstraite ne peut pas être instanciée.
    - Les méthodes abstraites n'ont pas de contenu (pas de corps)
    - Pour déclarer une méthode abstraite, il faut OBLIGATOIREMENT être dans une classe abstraite.
    - Une classe abstraite peut contenir des méthodes normales.
    - Lorsqu'on hérite d'une classe abstraite on doit OBLIGATOIREMENT redéfinir les méthodes abstraites.

    Le développeur maître (lead dev') qui est au coeur de l'application va obliger les autres dev' à redéfinir des méthodes. Ceci est une bonne pratique dans le cadre d'un travail collaboratife et hiérarchisé.
*/
