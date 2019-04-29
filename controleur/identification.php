<?php
include "../modele/identification.php";

//vérification si le login existe et qu'il dispose du bon mot de passe.
function verifi_login_password($login,$password){

	$login_recherche=identifier($login);
	if ($login_recherche['login']==$login AND password_verify($password,$login_recherche['mot_de_passe'])){
		$_SESSION['id_utilisateur']=$login_recherche['id_utilisateur'];
		$_SESSION['nom']=$login_recherche['nom'];
		$_SESSION['prenom']=$login_recherche['prenom'];
		$_SESSION['adresse']=$login_recherche['adresse'];
		$_SESSION['code_postal']=$login_recherche['code_postal'];
		$_SESSION['date_naissance']=$login_recherche['date_naissance'];
		$_SESSION['adresse_email']=$login_recherche['adresse_email'];
		$_SESSION['login']=$login_recherche['login'];
		return true;
		
	}
	else
		return false;
}

//j'ajoute à ma table connexion utilisateur un enregistrement et je redirige vers les pages adéquates.

if (verifi_login_password($_POST['login'],$_POST['mot_de_passe'])){
	
	ajouter_connexion($_SESSION['id_utilisateur']);			
	header('location:../vue/acceuil_user_connecte.php');
			
}
else{
	echo "la connection à echouer";
}

