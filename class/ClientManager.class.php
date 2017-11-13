<?php
class ClientManager {
    private $tableau = [];

    public function ajout_client($nom, $prenom, $conseiller){
        array_push($this->tableau,new client($nom, $prenom, $conseiller));
        $conseiller->ajout_client();
    }

    public function affiche_client($conseiller){
        echo "<strong>Le conseiller : </strong><br>".$conseiller."<br> <strong>Client : </strong><br>";
        for ($i=0; $i < count($this->tableau) ; $i++) { 
            if ($conseiller == $this->tableau[$i]->get_conseiller()) {

                echo $this->tableau[$i]->get_infos();
            }

        }
    }  
}