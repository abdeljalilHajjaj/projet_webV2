<?php 
// appel du modele pour récuperer la liste des utilisateurs.
include "../modele/liste_des_utilisateurs.php";
require '../modele/mes_achats.php';


$liste_achats=null;


$liste_des_utilisateurs=afficher_liste_utilisateurs();

$detail_utilisateur=NULL;
/*je vérifie sur quel bouton l'utilisateur a appuyer.
 je vérifie si la variable $_POST['liste_utilisateurs'] existe et si elle contient une valeur.
si oui j'appel la fonction affiche_detail_utilisateur() avec comme parametre l'utilisateur dont je veux afficher les détails.
*/

if (isset($_POST["afficher_details"])){
	if (isset($_POST['liste_utilisateurs']) AND !empty($_POST['liste_utilisateurs'])){
		$detail_utilisateur=affiche_detail_utilisateur($_POST['liste_utilisateurs']);
		$liste_achats=liste_achats($detail_utilisateur["id_utilisateur"]);

	}
}
/*
Quand j'appuie sur le boutton bloquer utilisateur je verifie si j'ai bien choisi un utilisateur dans la liste et je verifie si il est different d'admin ensuite j'appel la fonction bloquer utilisateur qui va bloquer mon utilisateur(boolean bloquer = true).
*/
if (isset($_POST["bloquer_utilisateur"])){
	if (isset($_POST['liste_utilisateurs'])AND !empty($_POST["liste_utilisateurs"])AND $_POST["liste_utilisateurs"]!="ADMIN"){ bloquer_utilisateur($_POST['liste_utilisateurs']);
	}
}


if (isset($_POST["debloquer_utilisateur"])){
	if (isset($_POST['liste_utilisateurs'])AND !empty($_POST["liste_utilisateurs"])AND $_POST["liste_utilisateurs"]!="ADMIN"){ 
		debloquer_utilisateur($_POST['liste_utilisateurs']);
	}
}

if($detail_utilisateur!=null){
	$nbr_connexion_aujourdhui=nombre_connexion_aujourdhui($detail_utilisateur['id_utilisateur']);
	$nbr_connexion_7jours=nombre_connexion_7jours($detail_utilisateur['id_utilisateur']);
}

//appel de vue pour affichage des utilisateurs.
include "../vue/liste_des_utilisateurs.php";
