<?php
include('connexion_bdd.php');



//fonction qui permet d'ajouter un commentaire dans la table comment_article(table des commentaires).

function ajouter_comment($commentaire,$date,$id_user,$id_article){

	global $bdd;

	$req=$bdd->prepare('INSERT INTO comment_article(id_comment, nom_comment, date_comment,auteur_comment, utilisateur_id, article_id) VALUES (:id_comment, :nom_comment, :date_comment,:auteur_comment, :utilisateur_id, :article_id)');

	$req->execute(array(
		'id_comment'=>'',
		'nom_comment'=>$commentaire,
		'date_comment'=>$date,
		'auteur_comment'=>$_SESSION['nom'],
		'utilisateur_id'=>$id_user,
		'article_id'=>$id_article));

}


//fonction qui permet d'afficher la liste des commentaires d'un article.

function affiche_comment($id_article){

	global $bdd;
	$commentaire=null;

	$req=$bdd->prepare('SELECT date_comment, auteur_comment, nom_comment FROM comment_article
		WHERE article_id=?');

	$req->execute(array($id_article));

	$commentaire=$req->fetchall();


	return $commentaire;
} 

