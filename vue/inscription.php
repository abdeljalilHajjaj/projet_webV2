
<!DOCTYPE html>
<html>
	<?php include('../vue/head.php');?>
<body>
	<?php include('../vue/header.php');?>


    <?php include "../vue/menu.php";?>
   
    <div class="container">
    	<form class="form-horizontal" action ="../controleur/inscription.php" method ="post" >
	    	<h2>Création de compte :</h2>
	    		<div class="form-group">	    	
	    			<label class="control-label col-sm-2" for="nom">Votre nom :</label>
	    			<div class="col-sm-8">	    		
	    				<input class="form-control" type ="text " name ="nom" id=" nom "/>
	    			</div>	
	    		</div>	
	    		<div class="form-group">
		    		<label class="control-label col-sm-2" for="prenom">Votre pénom :</label>
		    		<div class="col-sm-8">	    		
		    			<input class="form-control" type ="text" name ="prenom" id="prenom"/>
		    		</div>
	    		</div>
	    		
	    		<div class="form-group">
		    		<label class="control-label col-sm-2" for="adresse">Votre adresse :</label>	
		    		<div class="col-sm-8">    	
		    			<input class="form-control" type ="text" name ="adresse" id="adresse"/>
		    		</div>	
		    	</div>	

	    		<div class="form-group">
		    		<label class="control-label col-sm-2" for="code_postal">Votre code postal :</label>
		    		<div class="col-sm-8">	    		
		    			<input class="form-control" type ="number" name ="code_postal" id="code_postal"/>
		    		</div>	
	    		</div>
	    		<div class="form-group">
		    		<label class="control-label col-sm-2" for="date_naissance">Votre date de naissance :</label>
		    		<div class="col-sm-8">	    		
		    			<input class="form-control" type ="date" name ="date_naissance" id="date_naissance"/>
		    		</div>	
	    		</div>
	    		<div class="form-group">
	    			<label class="control-label col-sm-2" for="adresse_email">Votre adresse email:</label>
	    			<div class="col-sm-8">	    		
	    				<input class="form-control" type ="email" name ="adresse_email" id="adresse_email"/>
	    			</div>	
	    		</div>
	    		<div class="form-group">
		    		<label class="control-label col-sm-2" for="login">Votre Login:</label>	
		    		<div class="col-sm-8">    		
		    			<input class="form-control" type ="text" name ="login" id="login"/>
		    		</div>	
	    		</div>
	    		<div class="form-group">
	    			<label class="control-label col-sm-2" for="mot_de_passe">Votre mot de passe</label>	
	    			<div class="col-sm-8">    		
	    				<input class="form-control" type ="password" name ="mot_de_passe" id="mot_de_passe"/>
	    			</div>	
	    		</div>
	    		<div class="form-group">
	    			<input class="btn btn-primary active" type ="submit" value ="Valider"> 
	    		</div>						
	    </form>
    </div>	

    <?php
    		include('..\vue\footer.php');
    	?>

</body>

</html>

