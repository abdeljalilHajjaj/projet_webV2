<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<?php include('../vue/head.php');?>
<body>
	<?php include('../vue/header.php');?>    	
    <?php include ('../vue/menu.php');?>
   
    <section class="container">

    	<form class="form-horizontal" action ="/../site_web/controleur/ajouter_article.php" method ="post" >
	    	<h2>Création d'un article :</h2>  		
	    	<div class="form-group">
		    	<label class="control-label col-sm-2" for="type_article">Choisir le type de l'article :</label>
		    	<div class="col-sm-8">
			    	<select class="form-control" name="type_article" id="type_article">	    			
			    		<option value="informatique">Informatique</option>
			    		<option value="livre">Livre</option>
			    		<option value="hifi">Hi-fi</option>	    			
			    	</select>
			    </div>	
	    	</div>

	    	<div class="form-group">
		    	<label class="control-label col-sm-2" for="nom_article">Nom de l'article :</label>	
		    	<div class="col-sm-8">    		
		    		<input class="form-control" type ="text " name ="nom_article" id="nom_article"/>
		    	</div>
		    </div>	
	        		
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="quantite_article">Quantité de l'article :</label>
		    	<div class="col-sm-8">	    		
		    		<input class="form-control" type ="number" name ="quantite_article" id="quantite_article"/>
		    	</div>	
		    </div>	
	    	
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="prix_article">prix unitaire de l'article :</label>
		    	<div class="col-sm-8">	    		
	    			<input class="form-control" type ="text" name ="prix_article" id="prix_article"/>
	    		</div>	
		    </div>
	    	
	    		
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="description_article">Déscription de l'article :</label>	
		    	<div class="col-sm-8">    		
		    		<textarea class="form-control" name ="description_article" id="description_article"></textarea>
		    	</div>	  			
	    	</div>

	    	<div class="form-group">
	    		<input class="btn btn-primary active" type ="submit" value ="Valider">
	    	</div>      							

	    </form>
    </section>	

    <?php
    		include('..\vue\footer.php');
    	?>

</body>

</html>

