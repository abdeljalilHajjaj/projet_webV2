<?php

// appel du modele pour récuperer la liste des articles.
require"../modele/liste_des_articles.php";
$article_info=liste_materiel_info();
$article_hifi=liste_hifi();
$article_livre=liste_livres();

include "../vue/achat_materiels.php";