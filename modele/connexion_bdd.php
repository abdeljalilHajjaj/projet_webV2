<?php 
try {

	$bdd = new  PDO('mysql:host=localhost;dbname=monsiteweb', 'root', '');


} catch (Exception $e) {
		die('erreur'.$e->getMessage());
}
