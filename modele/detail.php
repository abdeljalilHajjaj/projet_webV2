<?php

require('connexion_bdd.php');

//fonction qui permet d'afficher la detail de la commande.

function detail_achat($id_commande){
	global $bdd;
	$detail=null;	

	$req=$bdd->prepare('SELECT id_commande, date_commande, prix_commande, quantite_commande, prix_article, nom_article FROM article, commande, ligne_commande WHERE id_commande = ? AND id_commande=commande_id AND article_id=id_article');

	$req->execute(array($id_commande));
	$detail=$req->fetchall();

	return $detail;

	
}
