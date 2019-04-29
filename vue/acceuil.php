<!DOCTYPE html>
<html>
    
	<?php include('../vue/head.php');?>
    <body>
    	<?php include('../vue/header.php');?>    	
    	<?php include ('../vue/menu.php');?>

	    
    	<div class = "container">
    		<section class="container col-sm-6">
	    	<form class="form-horizontal" method ="post" action ="../controleur/identification.php">	    			
	    		<h2>Mon compte</h2>
	    		<div class="form-group">
	    			<label class="control-label col-sm-4" for="login">Nom utilisateur </label>	
	    			<div class="col-sm-6">    		
	    				<input type ="text" class="form-control" name ="login" id="login"/>	
	    			</div>    			
	    		</div>
	    		<div class="form-group">		
		    		<label class="control-label col-sm-4" for="mot_de_passe">Mot de passe </label>
		    		<div class="col-sm-6">	    			
		    			<input type ="password" class="form-control" name ="mot_de_passe" id="mot_de_passe"/>
		    		</div>
	    		</div>
	    		<div class="form-group">	
	    			<input type ="submit" class="btn btn-primary active" value ="Login"/>
	    		</div>			  					
	    	
	    	</form>	    		
	    	</section>

		    <section class ="container col-sm-6">
		    	<form method ="post" action ="inscription.php">
		    	<h2>Inscription</h2>
		    	<div class="form-group">
		    		<label for="pasdecompte">Vous n'avez pas de compte ? </label>
		    	</div>		    			
		    	<input type ="submit" class="btn btn-primary active" value ="S'inscrire"/> 	    		
		    	
		    	</form>	    		
		    </section>
    	</div>	    	    			
	    		
	    
	 
    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>