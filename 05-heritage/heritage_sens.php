<?php


// Transitivité : si une classe B hérite d'une classe A, et que la classe C hérite de la classe B, alors la classe C hérite de la classe A.

class A 
{
    public function testA() {
        return 'Test A';
    }
}

class B extends A
{
    public function testB() {
        return 'Test B';
    }
}

class C extends B
{
    public function testC() {
        return 'Test C';
    }
}

$c = new C;
echo $c -> testA() . '<br/>';   // méthode de A accessible par C (héritage indirect)
echo $c -> testB() . '<br/>';   // méthode de A accessible par C (héritage direct)
echo $c -> testC() . '<br/>';   // méthode de A accessible par C

echo '<pre>';
var_dump(get_class_methods($c));
echo '</pre>';


/*
Commentaires :

    Transitivité :
        Si B hérite de A 
            Et que C hérite de B
                ... Alors C hérite de A (indirectement)
    ---> Même les méthodes protectided de A sont accessibles dans C malgré l'héritage indirect.

    - L'héritage est :
        - non reflexif : Class D extends D : une classe ne peut pas hériter d'elle-même.
        - non symétrique : si E extends F, alors F n'est pas extends de E
        - sans cycle : si E extends F, alors Fil est impossible que F extends E
        - non multiple : class N extends M, P : en PHP il n'existe pas d'héritage multiple...
    - Une classe parente peut avoir un nombre infini d'héritiers.

*/