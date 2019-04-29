<?php
session_start();
require '../modele/detail.php';

if (isset($_GET['id'])){
	$id=$_GET['id'];

	$detail_achats=detail_achat($id);
}
include '../vue/detail.php';