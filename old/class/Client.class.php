<?php
require_once('Personne.class.php');
require_once('Conseiller.class.php');

class Client extends Personne {
	private $conseiller;

	public function __construct ($nom, $prenom, $conseiller){
		parent::__construct($nom, $prenom);
		$this->conseiller = $conseiller;
	}
	public function get_infos(){
		return $this->get_nom();
	}
	public function get_conseiller(){
		return $this->conseiller;
	}
}
?>