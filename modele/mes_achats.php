<?php

require('connexion_bdd.php');
//fonction qui permet d'afficher la liste complete des achats.

function liste_achats($client_id){
	global $bdd;
	$liste_achats=null;	

	$req=$bdd->prepare('SELECT id_commande, date_commande, prix_commande FROM commande WHERE client_id = ? 
		ORDER BY date_commande ASC');
	$req->execute(array($client_id));
	$liste_achats=$req->fetchall();

	return $liste_achats;
	
}