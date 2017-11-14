<?php
require_once('Personne.class.php');
require_once('ClientManager.class.php');

class Conseiller extends Personne {
	private  $nb_client = 0;

	public function get_nb_client(){
		return $this->nb_client;
	}
	public function ajout_client(){
		return $this->nb_client++;
	}
}
?>