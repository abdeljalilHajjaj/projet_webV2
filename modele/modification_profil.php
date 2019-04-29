<?php  
session_start();
include "connexion_bdd.php";


function modifier_profil($adresse_email,$mot_de_passe,$code_postal){
	global $bdd;

	$req= $bdd->prepare('UPDATE utilisateur SET adresse_email=:adresse_email, mot_de_passe=:mot_de_passe,code_postal=:code_postal WHERE login=:login');
	$req->execute(array(
		'adresse_email'=>$adresse_email,
		'mot_de_passe'=>$mot_de_passe,
		'code_postal'=>$code_postal,		
		'login'=>$_SESSION['login']));	
}

