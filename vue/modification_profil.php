<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
    <?php include('../vue/head.php');?>

    <body>
    	<?php include('../vue/header.php');?>
    	
	    <?php include "../vue/menu.php";?>

	    	<section class="container-fluid">
	    		<form class="form-horizontal" action ="/../site_web/controleur/modification_profil.php" method ="post" >
	    			
		    	<fieldset>
		    		<legend>Informations de connexion: </legend>
		    		 <div class="form-group">
			    		<label class="col-sm-2 control-label" for="nom">Votre nom :</label>	
			    		<div class="col-sm-10">	    		
			    			<input class="form-control" type ="text " name ="nom" id=" nom " disabled="disabled" value="<?php echo $_SESSION['nom'];?>">
			    		</div>			   	
			    	 </div>	
		    		
		    		<div class="form-group">
			    		<label class="col-sm-2 control-label" for="prenom">Votre pénom :</label>	
			    		<div class="col-sm-10">	    		
			    			<input class="form-control" type ="text" name ="prenom" id="prenom" disabled="disabled" value="<?php echo $_SESSION['prenom'];?>">
			    		</div>	
			    	</div>

			    	<div class="form-group">		    	
			    		<label class="col-sm-2 control-label" for="civilite">Votre civilité :</label>
			    		<div class="col-sm-10">		    		
			    			<input class="form-control" type ="text " name ="civilite" id=" civilite" disabled="disabled" value="<?php echo $_SESSION['civilite'];?>">
			    		</div>	
			    	</div>	
		    		
		    		<div class="form-group">	
			    		<label class="col-sm-2 control-label" for="adresse">Votre adresse :</label>	
			    		<div class="col-sm-10">	    	
			    			<input class="form-control" type ="text" name ="adresse" id="adresse" disabled="disabled" value="<?php echo $_SESSION['adresse'];?>">
			    		</div>	
			    	</div>	
			    	<div class="form-group">			    	
			    		<label class="col-sm-2 control-label" for="code_postal">Votre code postal :</label>	
			    		<div class="col-sm-10">		    		
			    			<input class="form-control" type ="text" name ="code_postal" id="code_postal" value="<?php echo $_SESSION['code_postal'];?>">
			    		</div>	
			    	</div>
			    	<div class="form-group">			    
			    		<label class="col-sm-2 control-label" for="date_naissance">Votre date de naissance :</label>	    	
			    		<div class="col-sm-10">	
			    			<input class="form-control" type ="text" name ="date_naissance" id="date_naissance" disabled="disabled" value="<?php echo $_SESSION['date_naissance'];?>">
			    		</div>	
			    	</div>	
		    		
		    		<div class="form-group">	
			    		<label class="col-sm-2 control-label" for="adresse_email">Votre adresse email:</label>
			    		<div class="col-sm-10">		    		
			    			<input class="form-control" type ="email" name ="adresse_email" id="adresse_email" value="<?php echo $_SESSION['adresse_email'];?>">
			    		</div>	
			    	</div>	

		    		<div class="form-group">	
			    		<label class="col-sm-2 control-label" for="login">Votre Login:</label>	
			    		<div class="col-sm-10">		    		
			    			<input class="form-control" type ="text" name ="login" id="login" disabled="disabled" value="<?php echo $_SESSION['login'];?>">
			    		</div>	
		    		</div>

		    		<div class="form-group">
			    		<label class="col-sm-2 control-label" for="nouveau_mot_de_passe">Nouveau mot de passe</label>    		
			    		<div class="col-sm-10">
			    			<input class="form-control" type ="password" name ="nouveau_mot_de_passe" id="nouveau_mot_de_passe">
			    		</div>
			    	</div>

		    		<input class="btn btn-primary active" type ="submit" value ="Valider vos modifications"> 
		    		<br/><br/>
		    		<p class="paragraphe_info">*Vous pouvez modifier que votre adresse postale, votre adresse email ainsi que votre mot de passe</p>

		    	</fieldset>	    							

	   		 </form>
	    	</section>
	 
    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>