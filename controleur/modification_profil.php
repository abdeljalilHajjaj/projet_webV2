<?php
require "validation_champs.php";
require "../modele/modification_profil.php";

if(!empty($_POST['adresse_email']) and ! empty($_POST['code_postal']) and ! empty($_POST['nouveau_mot_de_passe'])){
	if(verif_code_postal($_POST['code_postal'])and verif_email($_POST['adresse_email'])){

		$_SESSION['adresse_email']=$_POST['adresse_email'];
		$_SESSION['code_postal']=$_POST['code_postal'];	
		modifier_profil($_POST['adresse_email'],securiser_pwd($_POST['nouveau_mot_de_passe']),$_POST['code_postal']);
		echo " modification réussis";
	}
}
else{
	header('location:../vue/modification_profil.php');
}
