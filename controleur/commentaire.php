<?php
session_start();
require('../modele/commentaire.php');



//Lorsque nous cliquons sur le bouton envoyer nous vérifons que l'utilisateur est bien connecté sinon on le renvois à la page de connection.
//nous securisons les donnees contres les failles xss.
//nous ajoutons les commentaires en fonction de l'article.
if (isset($_POST['bouton_envoyer'])){
	$id=$_POST['id'];
	

	if(isset($_SESSION['id_utilisateur'])){
		$id_user=$_SESSION['id_utilisateur'];

		if(!empty($_POST['commentaire'])){
			$commentaire=htmlentities($_POST['commentaire']);
			$date=date("Y-m-d H:i:s");						
			ajouter_comment($commentaire,$date,$id_user,$id);			
		}
		

	}
	else{
		header('Location:..\vue\acceuil.php');
	}

}

//Vérification si les variables $_GET['id'] existent.
if (isset($_GET['id'])){
	$id=$_GET['id'];
	

}

//affichage des commentaires de l'article sur lequel nous avons cliqué.

$liste_commentaire=affiche_comment($id);		
	


include('../vue/commentaire.php');
