<?php

include('connexion_bdd.php');

// fonction qui va permettre d'ajouter un enregistrement dans la table mini_chat.
function ajouter_mini_chat($user_id,$message,$pseudo){
	global $bdd;

	$req=$bdd->prepare(('INSERT INTO mini_chat(id_chat, user_id, message, pseudo) VALUES
	(:id_chat, :user_id, :message, :pseudo)'));

	$req->execute(array(
		'id_chat'=>'',
		'user_id'=>$user_id,
		'message'=>$message,
		'pseudo'=>$pseudo));

}

function affiche_messages(){
	global $bdd;
	$liste_messages=null;

	$req=$bdd->prepare('SELECT pseudo, message FROM mini_chat ORDER BY id_chat DESC LIMIT 10');
	$req->execute();
	$liste_messages=$req->fetchall();

	return $liste_messages;
}