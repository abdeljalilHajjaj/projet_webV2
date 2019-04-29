<?php
session_start();
require '../modele/mes_achats.php';


$liste_achats=null;

if (isset($_SESSION['id_utilisateur'])){
	$liste_achats=liste_achats($_SESSION['id_utilisateur']);
}


include '../vue/mes_achats.php';