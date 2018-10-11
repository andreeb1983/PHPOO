<?php

namespace Application;

use Espace1, Espace2;

//use Espace1;
//use Espace2;
//use PDO;


require 'espace1.php';
require 'espace2.php';

$c = new Espace1\A;
echo $c -> test1() . '<br/>';

$c = new Espace2\A;
echo $c -> test2();

/*
Commentaires :

    - Les namespaces sont des espaces virtuels qui nous permettent d'organiser/ranger nos classes. De cette manière, si deux dev' créent deux classes nommées à l'identique, cela ne pose aucun problème.
    - On peut voir les namespaces comme des tiroirs pour ranger des classes.

    - On déclare les namespaces obligatoirement au haut de chaque fichier.

    - lorsqu'on utilise les namespaces :
        1/ on appelle une classe avec son nom au complet
            ex: $a = new Espace1\A;
        2/ on doit importer le namespace
            ex: use Espace1;
            ex: use PDO;
            
*/
