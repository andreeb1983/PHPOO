<?php

// vendor/Repository/EntityRepository.php 

namespace repository;

use PDO;
use Manager\PDOManager;

class EntityRepository
{
    private $db;    // Contiendra noter objet PDO;

    public function __construct () {
        $this -> db = PDOManager::getInstance() -> getPDO();
        // Cette ligne permet de stocker la connexion à la BDD dans $db, directement à l'instanciation.
    }

    public function getDb () {
        return $this -> db;
        // Cette fonction return l'objet PDO stocké dans $db
    }

    public function getTableName () {
        // get_cales_classe() : retourne le nom de la classe dans laquelle nous sommes.
        //repository\ProduitRepository

        $table = str_replace(array('Repository\\',  'Repository') , '', get_called_class());
        // on a transformé : Repository\Produitrepository
        // en : Produit
        return $table;
        
        // Au moment où cette fonction sera exécutée, nous serons dans ProduitRepository, MembreRepository, ou CommandeRepository... 
        // Donc cette fonction est capable de récupérer le nom de la table que ces entités souhaitent interroger.
    }
    //--------------------------------
    //--------------------------------
    //----- REQUETES GENERIQUES

    // récupérer toutes les infos d'une table :
    public function findAll () {
        $requete = "SELECT * FROM " . $this -> getTableName();
     // requête = "SELECT * FROM produit" 
        
        $resultat = $this -> getDb() -> query($requete);
      //$resultat = $pdo -> query($requete);

        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this -> getTableName());
        //$resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\Produit);
        //$produit = new Produit;
        //produit -> titre = 'sqoed';
        //produit ->id_produit = '1';
        // setFetchMode(), en mode FETCH_CLASS permet d'instancier un objet en prenant les résultats de la requête, et en les affectant aux propriétés de l'objet. Pour que cela fonctionne il faut absolument que les champs dans la BDD soient identiques aux propriétés de la classe.

        $data = $resultat -> fetchAll();

        if (!$data) {
            return false;
        }
        else {
            return $data;
        }



    }

    // Récupérer un enregistrement par son ID :
    public function find($id) {
        // exercice : en se basant sur la function findALL(), créer une fonction find($i).

        $requete = "SELECT * FROM " .$this -> getTableName() . " WHERE id_" . $this -> getTableName() . " =:id";

        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> bindParam(':id', $id, PDO::PARAM_INT);
        $resultat -> execute();

        $resultat -> setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this -> getTableName());

        $data = $resultat -> fetch();

        if(!$data) {
            return false;
        }
        else {
            return $data;
        }

    } 

    //supprimer une entrée
    public function delete($id) {
        $requete = "DELETE FROM " . $this -> getTableName() . " WHERE id_ " . $this -> getTableName() . " = :id";
        // DELETE FROM Produit WHERE id_produit = $id

        $resultat = $this -> getDb -> prepare($requete);
        $resultat -> bindParam(':id', $id, PDO::PARAM_INT);
        $resultat -> execute();
        return $resultat -> execute();
    }
     
    // modifier une entrée
    //Méthode générique pour modifier un enregistrement avec la requete UPDATE
    public function update ($id, $infos) {
        $newValues = '';
		$first = FALSE; 
		foreach($infos as $key => $value){
			if($first == FALSE){
				$newValues .= " $key = :$key ";
				$first = TRUE;
			}
			else{
				$newValues .= ", $key = :$key ";
			}
		}

		$requete = "UPDATE " . $this -> getTableName() ." set " . $newValues . " WHERE id_". $this -> getTableName() . "=:id";
		
		
		//echo $requete; 
		$resultat = $this -> getDb() -> prepare($requete);
		$infos['id'] = $id;
		// la ligne ci-dessous est pour ajouter notre id passé en parametre dans l'array de la méthode execute(); 
 		return $resultat -> execute($infos);

    }
     
    // enregistrer une entrée 
    //Méthode générique pour ajouter un enregistrement
    public function register ($infos) {
        $requete = 'INSERT INTO ' . $this -> getTableName() . ' (' . implode(', ', array_keys($infos)) . ') VALUES (' . ":" . implode(", :", array_keys($infos)) . ')';
        // INSERT INTO MEMBRE (pseudo, nom, prenom, email, mdp, code_postal) VALUES (:pseudo, :nom, :prenom, :email, :mdp, :code_postal)

        // execute (array(
        //     'pseudo'         => 'Dédé83',
        //     'nom'            => 'BAPTISTE',
        //     'prenom'         => 'Andrée',
        //     'email'          => 'andreebaptiste@gmail.com',
        //     'mdp'            => '123654',
        //     'code_postal'    => 93260
        // ));
        
		//echo $requete; 
		
		$resultat = $this -> getDb() -> prepare($requete);
		
		if($resultat -> execute($infos)){
			return $this -> getDb() -> lastInsertId();
		}
		else{
			return false;
		}

    }
}