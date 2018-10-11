<?php

final class Application 
{
    public function run() {
        return 'L\'application se lance !';
    }
}

//class Extension extends Application {}  // ERREUR : on ne peut pas hériter d'une classe final

$app = new Application; // une classe finale peut être instanciée
$app -> run();

//-------

class Application2
{
    final function run2() {
        return 'L\'application se lance !';
    }
}
class Extension2 extends Application2
{
    //public function run2() {}   // ERREUR : on ne peut pas redéfinir ou surcharger une méthode finale
}

/*
Commentaires :

    - Une classe finale ne peut pas être héritée.
    - Une classe finale peut être instanciée.
    - Par définition, une classe finale ne contient que des méthodes finales; puisqu'on ne peut pas en hériter.

    - Une méthode finale ne peut pas être surchargée ou redéfinie
    - Une méthode finale peut être présente dans une classe normale.

*/
