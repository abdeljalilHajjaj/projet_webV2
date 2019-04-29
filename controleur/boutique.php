<?php
session_start();
// appel du modele pour récuperer la liste des articles.
require"../modele/liste_des_articles.php";
$article_info=liste_materiel_info();
$article_hifi=liste_hifi();
$article_livre=liste_livres();

if(isset($_POST['bt_achat'])){
      

	if (isset($_SESSION['panier'])){

		if(article_Exist($_POST['id_article'])){
			ajouter_Quantite($_POST['id_article']);
			
		}
		else{
			
			ajouter_Article($_POST['id_article'],$_POST['nom_article'],$_POST['prix_article']);	
			echo $_POST['nom_article'];	
		}
	

	}else{
		initialise_Panier();
		ajouter_Article($_POST['id_article'],$_POST['nom_article'],$_POST['prix_article']);

	}

	
}

function article_Exist($reference){
	$present=false;

	for ($i=0; $i < count($_SESSION['panier']['id_article']); $i++){ 
		if ($_SESSION['panier']['id_article'][$i]==$reference){
			$present=true;
		}
	}
	return $present;	
}

function initialise_Panier(){
	$_SESSION['panier']=array();
	$_SESSION['panier']['id_article'] = array();
	$_SESSION['panier']['nom_article'] = array();
	$_SESSION['panier']['quantite_article'] = array();
	$_SESSION['panier']['prix_article'] = array();

}

function ajouter_Article($id,$nom,$prix){
	array_push( $_SESSION['panier']['id_article'],$id);
	array_push( $_SESSION['panier']['nom_article'],$nom);
	array_push( $_SESSION['panier']['quantite_article'],1);
	array_push( $_SESSION['panier']['prix_article'],$prix);

}

function ajouter_Quantite($reference){
	for ($i=0; $i <count($_SESSION['panier']['id_article']) ; $i++) { 
		if(($_SESSION['panier']['id_article'][$i]==$reference) AND ($_SESSION['panier']['quantite_article'][$i]<10)){
			$_SESSION['panier']['quantite_article'][$i]+=1;

		}
	}
}

function total_panier(){
	$total=0;

	for ($i=0; $i <count($_SESSION['panier']['id_article']); $i++){
		$total+=$_SESSION['panier']['quantite_article'][$i] * $_SESSION['panier']['prix_article'][$i];
	}

}


include '../vue/boutique.php';