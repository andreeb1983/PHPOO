<?php

// Design Pattern : Littéralement "Modèle de conception".  Un design pattern c'est une solution qui a été trouvée  à un problème rencontré par la communauté.

// Singleton : C'est la réponse qui a été trouvé à la question comment créer une classe pour laquelle il n'existe qu'un seul objet ! 

class Singleton
{
    private static $instance = NULL;    // Objet Singleton

    private function __construct () {}  // La fonction étant private, alors notre class n'est plus instanciable. 
    private function __clone () {}  // la fonction étant private, il devient impossible de cloner un objet de cette classe.

    public static function getInstance() {
        //if(is_null(self::$instance)) {
        //if(self::$instance == NULL) {
        if(!self::$instance) {
            self::$instance = new self;
            //self::$instance = new Singleton;
        }
        return self::$instance;
    }   
}
//$singleton = new Singleton;     // IMPOSSIBLE
$singleton = Singleton::getInstance();  // $singleton est un objet de la class Singleton
$singleton2 = Singleton::getInstance();


echo '<pre>';
var_dump($singleton);
var_dump($singleton2);
echo '</pre>';
// $singleton2 et $singleton font référence au même objet (#1).