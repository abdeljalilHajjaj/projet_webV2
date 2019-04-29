<?php
session_start();
require ('../modele/panier.php');

if (isset($_POST['acheter']) AND isset($_SESSION['id_utilisateur'])){
		$id_client=$_SESSION['id_utilisateur'];
		$date=date("Y-m-d H:i:s");
		ajouter_commande($date,$id_client,$_POST['total']);

		$commande_id=last_id_commande();
		
		


		for ($i=0; $i <count($_SESSION['panier']['id_article']);$i++) {
			$article_id=$_SESSION['panier']['id_article'][$i];
			$quantite=$_SESSION['panier']['quantite_article'][$i];					
			ajouter_ligne_commande($article_id,$commande_id,$quantite);	

		}
		
	unset($_SESSION['panier']);
}
elseif (isset($_POST['acheter'])) {

	header('Location:../vue/acceuil.php');
}



include '../vue/panier.php';








