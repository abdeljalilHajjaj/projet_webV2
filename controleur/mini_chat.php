<?php
session_start();

include('../modele/mini_chat.php');

//recupération de la liste des 10 derniers message de la bd mini_chat.
$liste_messages=affiche_messages();

// fonction qui permet de vérifier la longueur des champs
function controle_longueur($login,$message){
	$controlok=false;

	if (strlen($login)>0 AND strlen($login)<256){
		if(strlen($message)>0 AND strlen($message)<256){
			$controlok=true;
		}
	}

	return $controlok;
}


//verification si c'est un utilisateur membre sinon je renvoi à la page d'authentification.


if(!isset($_SESSION['id_utilisateur'])){
	header('location: ../vue/acceuil.php');
}else{

	if(isset($_POST['pseudo']) AND isset($_POST['message'])){

		if (controle_longueur($_POST['pseudo'],$_POST['message'])){
			if(isset($_SESSION["pseudo_chat"])){
				ajouter_mini_chat($_SESSION['id_utilisateur'],htmlspecialchars($_POST['message']),$_SESSION["pseudo_chat"]);
			}
			else{
				ajouter_mini_chat($_SESSION['id_utilisateur'],htmlspecialchars($_POST['message']),htmlspecialchars($_POST['pseudo']));
				$_SESSION["pseudo_chat"]=$_POST['pseudo'];

			}
			
			$liste_messages=affiche_messages();

		}
		else
			echo "Veuillez vérifier la longueur de vos champs";

	}	
}



include "../vue/mini_chat.php";



		

	

