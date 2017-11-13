<?php
echo "Exercice POO : Compte (banque)<br>";
require_once("class/Conseiller.class.php");
require_once("class/Client.class.php");
require_once("class/ClientManager.class.php");


// $jim = new Personne("bou", "jim");
// var_dump($jim);
// $jean = new Personne("tat", "jean");
// var_dump($jean);


$liste_client = new ClientManager();
$jim = new Conseiller("bou", "jim");
$jeanne = new Conseiller("tir", "jeanne");

$liste_client->ajout_client("pol", "jean", $jim);
$liste_client->ajout_client("pierre", "jaques", $jim);
$liste_client->ajout_client("tata", "toto", $jeanne);




$liste_client->affiche_client($jim);
echo $jim->get_nb_client();
