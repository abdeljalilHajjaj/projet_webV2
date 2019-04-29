<?php

require('connexion_bdd.php');

function ajouter_un_utilisateur($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,$mot_de_passe,$adresse_email){
	$bdd = new  PDO('mysql:host=localhost;dbname=monsiteweb', 'root', '');


	$req= $bdd->exec('INSERT INTO utilisateur(nom,prenom,adresse,code_postal,date_naissance,login,mot_de_passe,adresse_email) VALUES("'.$nom.'","'.$prenom.'","'.$adresse.'","'.$code_postal.'","'.$date_naissance.'","'.$login.'","'.$mot_de_passe.'","'.$adresse_email.'")');
	


}
function trouve_login($login){
	$bdd = new  PDO('mysql:host=localhost;dbname=monsiteweb', 'root', '');

	$trouveOK=false;

	$req=$bdd->prepare('SELECT login, mot_de_passe FROM utilisateur WHERE login= ?');
	$req->execute(array($login));

	$login_recherche=$req->fetch();
	

		if ($login_recherche['login']==$login){
			$trouveOK=true;
			
		}
	return $trouveOK;
}