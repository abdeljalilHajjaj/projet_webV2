<?php
include ('connexion_bdd.php');

//fonction qui permet d'afficher la liste  du matériel informatique (nom du matériel et sa déscription).
function liste_materiel(){

	global $bdd;
	$liste_info=null;	

	$req=$bdd->prepare('SELECT id_article,nom_article, description_article FROM article ');
	$req->execute();
	$liste_materiel=$req->fetchall();

	return $liste_materiel;
}


function liste_materiel_par_titre($titre){

	global $bdd;
	$liste_=null;	

	$req=$bdd->prepare('SELECT id_article, nom_article, description_article FROM article WHERE nom_article like ?');
	$req->execute(array($titre));
	$liste_materiel=$req->fetchall();

	return $liste_materiel;
}
