<?php

require ('connexion_bdd.php');

//fonction qui permet d'afficher la liste complete des utilisateurs.
function afficher_liste_utilisateurs(){

	global $bdd;
	$liste_utilisateurs=null;	

	$req=$bdd->prepare('SELECT id_utilisateur, login, mot_de_passe, nom, prenom, adresse,code_postal, adresse_email, date_naissance FROM utilisateur');
	$req->execute();
	$liste_utilisateurs=$req->fetchall();

	return $liste_utilisateurs;
}

//fonction qui permet de chercher le détail d'un utilisateur selon son login.
function affiche_detail_utilisateur($login){

	global $bdd;
	$detail_utilisateur=null;

	$req=$bdd->prepare('SELECT id_utilisateur, login, mot_de_passe, nom, prenom, adresse,code_postal, adresse_email, date_naissance, bloquer FROM utilisateur WHERE login= ?');
	$req->execute(array($login));
	$detail_utilisateur=$req->fetch();

	return $detail_utilisateur;

}

//fonction qui permet de bloquer un utilisateur.

function bloquer_utilisateur($login){
	global $bdd;

	$req=$bdd->prepare('UPDATE utilisateur SET bloquer=? where login=?');
	$req->execute(array(1,$login));
}

//fonction qui permet de débloquer un utilisateur.

function debloquer_utilisateur($login){
	global $bdd;

	$req=$bdd->prepare('UPDATE utilisateur SET bloquer=? where login=?');
	$req->execute(array(0,$login));

}

function nombre_connexion_aujourdhui($id_utilisateur){
	global $bdd;
	


	$req=$bdd->prepare('SELECT COUNT(*) FROM connexion_utilisateur WHERE date_connexion=CURRENT_DATE AND utilisateur_id=?');
	$req->execute(array($id_utilisateur));
	$nb_connexion=$req->fetch();

	return $nb_connexion['COUNT(*)'];
}

function nombre_connexion_7jours($id_utilisateur){
	global $bdd;
		


	$req=$bdd->prepare('SELECT COUNT(*) FROM connexion_utilisateur WHERE utilisateur_id=? AND date_connexion BETWEEN CURRENT_DATE-6 AND CURRENT_DATE');
	$req->execute(array($id_utilisateur));
	$nb_connexion=$req->fetch();

	return $nb_connexion['COUNT(*)'];

}
