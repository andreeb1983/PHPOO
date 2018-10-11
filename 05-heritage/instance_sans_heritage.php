<?php


class C {}
//---------
class A 
{
    public function bonjour() {
        return 'Bonjour !';
    }
}
//--------
class B extends C   // B n'hérite pas de A
{
    public $maVariable; // Contient un objet de la classe A

    public function __construct() {
        $this -> maVariable = new A;
    }
}
//-------------
$b = new B;

echo $b -> maVariable -> bonjour();
//  $maVariable = new A;
//  $maVariable -> bonjour();
// objet A -> bonjour();

/*
Commentaires:
    - Nous avons un objet dans un objet, d'où l'utilisation de deux flèche successivement($x -> $y -> methode())
    - L'intérêt d'avoir une instance sans héritage ( récupérer un objet dans la priorité d'une classe) est de pouvoir hériter d'une classe mère d'un coté, tout en ayant la possibilité de récupérer les éléments d'une autre classe en même temps.

*/