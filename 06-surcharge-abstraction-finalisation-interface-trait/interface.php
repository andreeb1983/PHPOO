<?php

interface Mouvement     //on utlise le mot clé 'interface' et non 'class'
{
    public function start();
    public function turnRight();
    public function turnLeft();
    // dans une interface, les méthodes n'ont JAMAIS de contenu (de corps)
}

class bateau implements Mouvement   // on utilise le mot clé 'implements et non 'extends' pour les interface
{
    public function start() {   // quand on implements une interface on a l'obligation de redéfinir toutes les méthodes de l'interface. 

    }

    public function turnRight() {
        
    }

    public function turnLeft() {
        
    }
}

class Avion implements Mouvement 
{
    public function start() {

    }

    public function turnRight() {
        
    }

    public function turnLeft() {
        
    }
}

/*
Commentaires :

    - une interface est une liste de méthodes sans contenu qui permet de garantir que toutes les classes qui vont implémenter l'interface contiendront les mêmes noms de méthodes. C'est une sorte de contrat qui est passé entre le lead dev' et les autres dev'. C'est un plan de fabrication d'une classe.
    - une interface ne peut pas être instanciée.
    - une classe peut à la fois extends une classe mère et implements une ou plusieurs interface(s)
    - les méthodes d'une interface doivent forcément être public sinon on ne peut pas le redéfinir.

    */