<?php
session_start();
include ('connexion_bdd.php');

//fonction qui permet de verifier si le mot de passe et le login sont valide si oui il charge les donnnées de l'utilisateur.
function identifier($login){

	global $bdd;
	
	$login_recherche=null;

	$req=$bdd->prepare('SELECT id_utilisateur,login, mot_de_passe, nom, prenom,adresse,code_postal, adresse_email,date_naissance FROM utilisateur WHERE login= ?');
	$req->execute(array($login));

	$login_recherche=$req->fetch();

	

	
	return $login_recherche;
}


function ajouter_connexion($id_utilisateur){
	global $bdd;

	$req=$bdd->prepare('INSERT INTO connexion_utilisateur(id_connexion,utilisateur_id,date_connexion)VALUES (:id_connexion,:utilisateur_id,:date_connexion)');
	$req->execute(array(
		'id_connexion'=>'',
		'utilisateur_id'=>$id_utilisateur,
		'date_connexion'=> date("Y-m-d H:i:s")));
	

	echo "le nombre de connexion à ete ajouter <br/>";


}



