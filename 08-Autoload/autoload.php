<?php

function inclusion_automatique($className) {
    // $className contiendra le nom de la classe
    // exemple : Membre

    require 'class'.  $className . '.php';
    // require 'classMembre.php'

    echo 'On passe dans l\'autoload<br/>';
    echo 'On fait un require "class' . $className . '.php";<br/>';

}

//--------------
spl_autoload_register('inclusion_automatique');
//--------------
/*
Commentaires :
    spl_autoload_register :
        - est une fonction très pratique.
        - elle va s'exécuter à chaque fois que l'interpréteur voit passer le mot 'new'.
        - elle va exécuter une fonction dont on lui a transmis le nom en argument.
        - elle va apporter un argument de notre fonction le mot qu'elle trouve après 'new' (sous entendu le nom de la classe).

        $a = new Membre;
        classMembre.php
        
*/












