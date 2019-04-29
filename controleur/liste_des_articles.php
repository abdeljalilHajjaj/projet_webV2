<?php
// appel du modele pour récuperer la liste des articles.
include "../modele/liste_des_articles.php";
$detail_article=null;
// je verifie si l'utilisateur clique sur le bouton modifier dans la partie matériel informatque, je fais appel à la fonction qui me permet d'afficher le détail du matériel selectionné dans les champs corresepondants.

if (isset($_POST["modifier_info"])){
	if (isset($_POST['liste_info']) AND !empty($_POST['liste_info'])){

		$temp_detail_article=affiche_detail_article($_POST['liste_info']);
		$detail_article['id_article']=$temp_detail_article['id_article'];
		$detail_article['nom_article']=$temp_detail_article['nom_article'];
		$detail_article['quantite_article']=$temp_detail_article['quantite_article'];
		$detail_article['prix_article']=$temp_detail_article['prix_article'];
		$detail_article['description_article']=$temp_detail_article['description_article'];
		
	}
}
// je verifie si l'utilisateur clique sur le bouton modifier dans la partie livres, je fais appel à la fonction qui me permet d'afficher le détail du livre selectionné dans les champs corresepondants.

if (isset($_POST["modifier_livre"])){

	if (isset($_POST['liste_livre']) AND !empty($_POST['liste_livre'])){

		$temp_detail_article=affiche_detail_article($_POST['liste_livre']);
		$detail_article['id_article']=$temp_detail_article['id_article'];
		$detail_article['nom_article']=$temp_detail_article['nom_article'];
		$detail_article['quantite_article']=$temp_detail_article['quantite_article'];
		$detail_article['prix_article']=$temp_detail_article['prix_article'];
		$detail_article['description_article']=$temp_detail_article['description_article'];
		

	}
}
// je verifie si l'utilisateur clique sur le bouton modifier dans la partie Hi-fi, je fais appel à la fonction qui me permet d'afficher le détail du matériel hi-fi selectionné dans les champs corresepondants.

if (isset($_POST["modifier_hifi"])){

	if (isset($_POST['liste_hifi']) AND !empty($_POST['liste_hifi'])){

		$temp_detail_article=affiche_detail_article($_POST['liste_hifi']);
		$detail_article['id_article']=$temp_detail_article['id_article'];
		$detail_article['nom_article']=$temp_detail_article['nom_article'];
		$detail_article['quantite_article']=$temp_detail_article['quantite_article'];
		$detail_article['prix_article']=$temp_detail_article['prix_article'];
		$detail_article['description_article']=$temp_detail_article['description_article'];
	

	}
}
// je verifie si l'utilisateur clique sur le bouton supprimer dans la partie informatique, je fais appel à la fonction qui me permet de supprimer un article selectionné.

if (isset($_POST["supprimer_info"])){
	if (isset($_POST['liste_info']) AND !empty($_POST['liste_info'])){

		supprimer_article($_POST['liste_info']);
		header('Location:/../site_web/controleur/liste_des_articles.php');
	}
}

// je verifie si l'utilisateur clique sur le bouton supprimer dans la partie livre, je fais appel à la fonction qui me permet de supprimer un livre selectionné.

if (isset($_POST["supprimer_livre"])){
	if (isset($_POST['liste_livre']) AND !empty($_POST['liste_livre'])){

		supprimer_article($_POST['liste_livre']);
		header('Location:/../site_web/controleur/liste_des_articles.php');
	}
}

// je verifie si l'utilisateur clique sur le bouton supprimer dans la partie hifi, je fais appel à la fonction qui me permet de supprimer un matériel hifi selectionné.

if (isset($_POST["supprimer_hifi"])){
	if (isset($_POST['liste_hifi']) AND !empty($_POST['liste_hifi'])){

		supprimer_article($_POST['liste_hifi']);
		header('Location:/../site_web/controleur/liste_des_articles.php');
	}
}

// quand l'utilisateur appuie sur le bouton enregistrer je fais les verifications isset() et is_numeric()  et j'appel les differentes fonctions pour enregistrer les modifications en rapport avec le type d'article.

if (isset($_POST["enregistrer_article"])){	
	
	if(isset($_POST['id_article']) AND isset($_POST['nom_article']) AND isset($_POST['quantite_article']) AND isset($_POST['prix_article']) AND isset($_POST['description_article'])){

		if(is_numeric($_POST['quantite_article']) AND is_numeric($_POST['prix_article'])){

			$id_article=htmlspecialchars($_POST['id_article']);
			$nom_article=htmlspecialchars($_POST['nom_article']);
			$quantite_article=htmlspecialchars($_POST['quantite_article']);
			$prix_article=htmlspecialchars($_POST['prix_article']);
			$description_article=htmlspecialchars($_POST['description_article']);
			modifier_article($id_article,$nom_article,$quantite_article,$prix_article,$description_article);	
			


		}
		
		
	}

}

$liste_info=liste_materiel_info();
$liste_livre=liste_livres();
$liste_hifi=liste_hifi();



include "../vue/liste_des_articles.php";
