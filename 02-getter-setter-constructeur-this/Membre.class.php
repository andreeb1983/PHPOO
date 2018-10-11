<?php

// Consignes :  Au regard de la classe ci-dessous, veuillez affecter des valeurs à $pseudo et $email et afficher dans la page.

class Membre
{
    private $pseudo;
    private $email;

    public function setPseudo($pseudo) {
        $this -> pseudo = $pseudo;          
    }
    public function getPseudo() {
       return $this -> pseudo;
    }


    public function setEmail($email) {
        $this -> email = $email;          
    }
    public function getEmail() {
        return $this -> email;
    }
}

$membre = new Membre;

$membre -> setPseudo('Dre');
$membre -> setEmail('andree.baptiste@lepoles.com');

echo 'Pseudo : ' . $membre -> getPseudo() . '<br/>';
echo 'Email : ' . $membre -> getEmail() . '<br/>';
