<?php

class Animal
{
    public function manger() {
        return 'Je mange !';
    }

    protected function deplacement() {
        return 'Je me déplace';
    }

}
//------
class Elephant extends Animal // Extends signifie que la classe Elephant hériete de la classe Animal
{
    public function quiSuisJe() {
        return 'Je suis un éléphant et ' . $this -> deplacement();
    }

}
//------
class Chat extends Animal // Extends signifie que la classe Chat hériete de la classe Animal
{
    public function quiSuisJe() {
        return 'Je suis un chat';
    }

    public function manger() {
        return 'Je mange peu !';
    }
    //Redéfinition de la méthode manger()

}
//----------
// Elephant
$eleph = new Elephant;
echo 'Elephant > ' . $eleph -> manger() . ' <br/>';
echo 'Elephant > ' . $eleph -> quiSuisJe() . ' <br/>';


// Chat
$chat = new Chat;
echo 'Chat > ' . $chat -> manger() . ' <br/>';
echo 'Chat > ' . $chat -> quiSuisJe() . ' <br/>';

/*
Commentaires:

    - L'héritage est l'un des fondements de la programmation en objet.
    - Lorsqu'une classe hérite d'une autre classe, c'est comme-ci tout le code était importé. Les éléments (non private) sont donc accessibles avec $this ->
    
    - Redéfinition : une classe enfant (héritière) peut modifier le comportement global d'une méthode dont elle a héritée. 
    - Surcharge : une classe enfant (héritière) peut modifier EN PARTIE le comportement d'une m'éthode dont elle a héritée (voir chapitre 6, ficher surcharge.php)
    /!\ redéfinition != surcharge

    Dans le cas l'héritage, l'interpréteur va regarder dans le classe enfant si les méthodes exécutées existent, et si elle ne le trouve pas regarde dans la classe parente.
*/