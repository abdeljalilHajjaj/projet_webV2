<?php
require("../modele/blog_news.php");



if (isset($_POST["bouton_ok"])){
	$article_secure=htmlentities($_POST["article_rechercher"]);
	if(!empty($article_secure) AND(strlen($article_secure)<51)){
		$mot_rechercher="%".$article_secure."%";
	}
	else{
		$mot_rechercher="";
	}
	
	

	$materiel=liste_materiel_par_titre($mot_rechercher);
	
}
else{
	$materiel=liste_materiel();
}


include("../vue/blog_news.php");
