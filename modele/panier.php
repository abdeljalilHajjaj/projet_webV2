<?php

require('connexion_bdd.php');

//fonction qui permet d'enregistrer une commande dans la bd.

function ajouter_commande($date,$id_client,$prix_commande){
	global $bdd;

	$req=$bdd->prepare('INSERT INTO commande(id_commande, date_commande, client_id, prix_commande) VALUES (:id_commande, :date_commande, :client_id, :prix_commande)');

	$req->execute(array(
		'id_commande'=>'',
		'date_commande'=>$date,
		'client_id'=>$id_client,
		'prix_commande'=>$prix_commande));

}

function last_id_commande(){
	global $bdd;


	$req=$bdd->prepare('SELECT MAX(id_commande) FROM commande');

	$req->execute();
	$last_id=$req->fetch();
	return $last_id[0];


}

function ajouter_ligne_commande($article_id,$commande_id,$quantite){
	global $bdd;

	$req=$bdd->prepare('INSERT INTO ligne_commande(article_id, commande_id, quantite_commande) VALUES (:article_id,:commande_id,:quantite_commande)');

	

	$req->execute(array(		
		'article_id'=>$article_id,
		'commande_id'=>$commande_id,		
		'quantite_commande'=>$quantite));

}

