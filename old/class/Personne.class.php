<?php

class Personne {


	protected  $id;
	private  $nom;
	private  $prenom;
	private static $compteur = 0;
	public function __construct ($nom, $prenom){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->id = self::$compteur;
		self::$compteur++;
	}
	public function get_nom(){
		return "id : ".$this->id."<br>Nom : ".$this->nom."<br>Prenom : ".$this->prenom."<br> ";
		
	}
	public function __toString(){
		return "id : ".$this->id."<br>Nom : ".$this->nom."<br>Prenom : ".$this->prenom."<br> ";		
	}
}
?>