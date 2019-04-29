<?php

require('validation_champs.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$date_naissance = $_POST['date_naissance'];
$login = $_POST['login'];
$mot_de_passe = $_POST['mot_de_passe'];
$adresse_email = $_POST['adresse_email'];

/* $nom.'<br>';
echo $prenom.'<br>';
echo $adresse.'<br>';
echo $code_postal.'<br>';
echo $date_naissance.'<br>';
echo $login.'<br>';
echo $mot_de_passe.'<br>';
echo $adresse_email.'<br>';

*/

$var_exist=variable_exist($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,$mot_de_passe,$adresse_email);

$champ_rempli=champs_remplis_ok($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,$mot_de_passe,$adresse_email);

$code_postalok=verif_code_postal($code_postal);
$emailok= verif_email($adresse_email);


if($var_exist and $champ_rempli and $code_postalok and $emailok){
	
	
	require('../modele/inscription.php');

	if(!(trouve_login($_POST['login']))){
		ajouter_un_utilisateur($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,password_hash($mot_de_passe,PASSWORD_DEFAULT),$adresse_email);
		header('Location:../vue/acceuil.php');
		
	}
	else{
		echo "désolé ce login est deja pris !";
	}
	
	
}
else{
	echo "il y a un soucis avec les champs !";
}


?>




