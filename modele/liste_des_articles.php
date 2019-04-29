<?php

include ('connexion_bdd.php');
//fonction qui permet d'afficher la liste complete du matériel informatique.
function liste_materiel_info(){

	global $bdd;
	$liste_info=null;	

	$req=$bdd->prepare('SELECT id_article, nom_article, prix_article, quantite_article, description_article FROM article WHERE type_article=1');
	$req->execute();
	$liste_info=$req->fetchall();

	return $liste_info;
}

//fonction qui permet d'afficher la liste complete des livres.
function liste_livres(){

	global $bdd;
	$liste_livres=null;	

	$req=$bdd->prepare('SELECT id_article, nom_article, prix_article, quantite_article, description_article FROM article WHERE type_article= 2');
	$req->execute();
	$liste_livres=$req->fetchall();

	return $liste_livres;
}

//fonction qui permet d'afficher la liste complete du matériel hi-fi.
function liste_hifi(){

	global $bdd;
	$liste_hifi=null;	

	$req=$bdd->prepare('SELECT id_article, nom_article, prix_article, quantite_article, description_article FROM article WHERE type_article= 3');
	$req->execute();
	$liste_hifi=$req->fetchall();

	return $liste_hifi;
}

//fonction qui permet de chercher le détail d'un matériel informatique selon son id.
function affiche_detail_article($id_article){

	global $bdd;
	$detail_article=null;

	$req=$bdd->prepare('SELECT id_article, nom_article, prix_article, quantite_article, description_article FROM article WHERE id_article= ?');
	$req->execute(array($id_article));
	$detail_article=$req->fetch();

	return $detail_article;

}




//fonction qui permet de supprimer un article.

Function supprimer_article($id_article){

	global $bdd;

	$req=$bdd->prepare('DELETE FROM article WHERE id_article=?');
	$req->execute(array($id_article));
	
}


//fonction qui permet de modifier un article de la catégorie informatique.

Function modifier_article($id_article,$nom_article,$quantite_article,$prix_article,$description_article){

	global $bdd;

	$req=$bdd->prepare('UPDATE article SET nom_article=:nom_article, quantite_article=:quantite_article, prix_article=:prix_article, description_article=:description_article WHERE id_article=:id_article');
	$req->execute(array(
		'nom_article'=>$nom_article,
		'quantite_article'=>$quantite_article,
		'prix_article'=>$prix_article,
		'description_article'=>$description_article,
		'id_article'=>$id_article));
}

//fonction qui permet de modifier un article de la catégorie livre.

Function modifier_livre($id_article,$nom_article,$quantite_article,$prix_article,$description_article){

	global $bdd;

	$req=$bdd->prepare('UPDATE livre SET nom_livre=:nom_livre, quantite_livre=:quantite_livre, prix_livre=:prix_livre, description_livre=:description_livre WHERE id_livre=:id_livre');
	$req->execute(array(
		'nom_livre'=>$nom_article,
		'quantite_livre'=>$quantite_article,
		'prix_livre'=>$prix_article,
		'description_livre'=>$description_article,
		'id_livre'=>$id_article));
}

//fonction qui permet de modifier un article de la catégorie hi-fi.

Function modifier_hifi($id_article,$nom_article,$quantite_article,$prix_article,$description_article){

	global $bdd;

	$req=$bdd->prepare('UPDATE hifi SET nom_hifi=:nom_hifi, quantite_hifi=:quantite_hifi, prix_hifi=:prix_hifi, description_hifi=:description_hifi WHERE id_hifi=:id_hifi');
	$req->execute(array(
		'nom_hifi'=>$nom_article,
		'quantite_hifi'=>$quantite_article,
		'prix_hifi'=>$prix_article,
		'description_hifi'=>$description_article,
		'id_hifi'=>$id_article));
}