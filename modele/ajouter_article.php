<?php

require('connexion_bdd.php');


//fonction qui permet d'ajouter un article.

function ajouter_article($nom,$prix,$quantite,$description,$type){
	global $bdd;

	$req=$bdd->prepare('INSERT INTO article(id_article, nom_article, prix_article, quantite_article, description_article,type_article) VALUES (:id_article, :nom_article, :prix_article,:quantite_article, :description_article,:type_article)');

	$req->execute(array(
		'id_article'=>'',
		'nom_article'=>$nom,
		'prix_article'=>$prix,
		'quantite_article'=>$quantite,
		'description_article'=>$description,
		'type_article'=>$type));

}

