<?php 
require_once("Connection.php");

class Tea extends Connection {
	// récupérer un thé
	public function getTea($id){
		// essaye de faire
		try{
			$requete= "SELECT * FROM the WHERE the_id = :id";
			$params = array(
				":id" => $id
			);
			// exucte retourne par défaut un tableau
			// comme il n'y a qu'une seule ligne
			// recupère uniquement la ligne 0
			// [0]
			if($this->execute($requete, $params)!= null){
				return $this->execute($requete, $params)[0];
			}
			else {
				throw new Exception("Le thé n'existe pas") ;
			}
			
		}
		// si tu n'y arrives pas alors récupère l'erreur
		catch(Exception $e){
			// affiche l'erreur
			// var_dump($e);
			// var_dump($e->getMessage());
			return null;
		}
		
	}

    // récupérer tous les thés
	public function getAllTea()
	{		
		$requete = "SELECT * FROM the";
		return $this->execute($requete);
	}
	// ajoute un thé
	public function addTea($nom)
	{
		$requete = "INSERT INTO the (nom) VALUES (:nom)";
		$params = array(
			":nom" => $nom
		);
		$this->query($requete, $params);
	}
	// met à jour un thé
	public function updateTea($id, $nom)
	{
		//modifier les données
		$requete = "UPDATE the SET nom=:nom WHERE the_id = :id";
		$params = array(
			":nom" => $nom,
			":id" => $id
		);
		$this->query($requete, $params);
	}
	// supprime un thé
	public function deleteTea($id)
	{
		//supprimer les données
		$requete = "DELETE FROM the WHERE the_id = :id";
		$params = array(
			":id" => $id
		);
		$this->query($requete, $params);
	}

	// supprime plusieurs thés
	public function deleteTeas($tab_id)
	{
		foreach($tab_id as $id)
		{
			$this->deleteTea($id);		
		}
	}
}

 ?>