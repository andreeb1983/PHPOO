<?php
//05-heritage
	//exemple_heritage.php
	
class Membre
{
	public $id_membre; 
	public $pseudo; 
	public $email; 
	
	public function inscription(){
		return 'Je m\'inscris !';
	}
	
	public function connexion(){
		return 'Je me connecte !'; 
	}
}

class Admin extends Membre
{
	// tout le code de la classe Membre est copié/collé ici
	
	public function accesBackOffice(){
		return 'J\'accède au Back Office !'; 
	}
}
//------

$admin = new Admin; 

echo 'Admin : ' . $admin -> inscription() . '<br/>'; 
echo 'Admin : ' . $admin -> connexion() . '<br/>';  
echo 'Admin : ' . $admin -> accesBackOffice() . '<br/>';  

echo '<pre>'; 
var_dump(get_class_methods($admin));
echo '</pre>'; 


/*
Commentaires : 

	- Dans notre boutique, un admin est avant tout un membre, avec quelques fonctionnalités supplémentaires (Accès au back Office : ajout membre, ajout de produit, modification...etc)

	- Il est donc naturel que la classe Admin soit héritière de la classe Membre, et qu'on ne réécrive pas tout le code. 

*/



