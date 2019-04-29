<?php 
	
	// fonction qui vérifie si les variables existent.
	function variable_exist($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,$mot_de_passe,$adresse_email){
		$var_existe=false;
		if (isset($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,$mot_de_passe,$adresse_email)){
			$var_existe=true;
		}


		return $var_existe;
	}	
	
	/*
	fonction qui vérifie si un des champs est vide.

	*/
	function champs_remplis_ok($nom,$prenom,$adresse,$code_postal,$date_naissance,$login,$mot_de_passe,$adresse_email){

		$champ_ok=false;
		if (empty($nom) OR empty($prenom) OR empty($adresse) OR empty($code_postal) OR empty($date_naissance)OR empty($login) OR empty($mot_de_passe)OR empty($adresse_email)){
		}
		else{
			$champ_ok=true;
		}
	
		return $champ_ok;
	}

	

	/* vérification du code postal si il est numerique ou pas*/

	function verif_code_postal($code_postal){
		$code_postalOK=false;

		if (is_numeric($code_postal) and ($code_postal)>0){
			$code_postalOK=true;
		}	

		return $code_postalOK;
	
	}
	

	/*Vérification  si l'adresse email est valide*/

	function verif_email($adresse_email){
		
		$email_OK=false;

		if(filter_var($adresse_email,FILTER_VALIDATE_EMAIL)){
		
			$email_OK=true;	
		}

		return $email_OK;

	}

	// hachage du mot de passe

	function securiser_pwd($mot_de_passe){

		return password_hash($mot_de_passe,PASSWORD_DEFAULT);

	}




	

