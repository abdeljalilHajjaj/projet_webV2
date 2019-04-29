<?php 
session_start();
session_destroy();
header('location:../vue/acceuil.php');
