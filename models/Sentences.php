<?php 
require_once("Connection.php");

class Sentences extends Connection {
	// récupérer un thé
	public function getSentenceRandom(){
		// essaye de faire
		try{
			$nb = random_int(1, $this->getSentenceCount());
			$requete= "SELECT * FROM sentences WHERE sentence_id = $nb";
			// exucte retourne par défaut un tableau
			// comme il n'y a qu'une seule ligne
			// recupère uniquement la ligne 0
			// [0]
			if($this->execute($requete)!= null){
				return $this->execute($requete)[0]['sentence'];
			}
			else {
				throw new Exception("The sentence doesn't exist") ;
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
	public function getSentenceCount(){
		// essaye de faire
		try{
			$requete= "SELECT COUNT(*) AS nb FROM `sentences`";
			// exucte retourne par défaut un tableau
			// comme il n'y a qu'une seule ligne
			// recupère uniquement la ligne 0
			// [0]
			if($this->execute($requete)!= null){
				return $this->execute($requete)[0]['nb'];
			}
			else {
				throw new Exception("The sentence doesn't exist") ;
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
}

 ?>