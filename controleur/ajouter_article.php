<?php

require('../modele/ajouter_article.php');

$var_exist=false;
$champs_remplis=false;
$champs_numeric=false;

$type_article=null;
$nom=null;
$quantite=null;
$prix=null;
$description=null;



// Vérification si les variables existent si oui je traduis tout les caractères en html avec la fonction htmlspecialchars.

if(isset($_POST['type_article']) AND isset($_POST['nom_article']) AND isset($_POST['quantite_article']) AND isset($_POST['prix_article']) AND isset($_POST['description_article'])){

	$type_article=htmlspecialchars($_POST['type_article']);
	$nom=htmlspecialchars($_POST['nom_article']);
	$quantite=htmlspecialchars($_POST['quantite_article']);
	$prix=htmlspecialchars($_POST['prix_article']);
	$description=htmlspecialchars($_POST['description_article']);

	$var_exist=true;
}

//vérification si tous les champs sont remplis
if(!empty($type_article) and !empty($nom) and !empty($quantite) and !empty($prix) and !empty($description)){
	$champs_remplis=true;
}

//vérification si les champs quantité et prix sont numerique.
if(is_numeric($prix) and is_numeric($quantite)){
	$champs_numeric=true;
}

//si toute les étapes de contrôle sont réussis alors je passe aux différentes fonctions d'ajout d'article.

if($var_exist and $champs_remplis and $champs_numeric){

	// en fonction du type d'article que l'administrateur aura choisi je fais appel aux fonctions correspondantes.
	switch ($_POST['type_article']) {
		case 'informatique':
			ajouter_article($nom,$prix,$quantite,$description,1);
			
			break;
		case 'livre':
			ajouter_article($nom,$prix,$quantite,$description,2);
			break;
		case 'hifi':
			ajouter_article($nom,$prix,$quantite,$description,3);		
			
			break;
	}

}

header('location:../vue/ajouter_article.php');

