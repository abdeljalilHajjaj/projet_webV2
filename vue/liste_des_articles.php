<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <?php include('../vue/head.php');?>

    <body>
    	<?php include('../vue/header.php');?> 
    	
	    <?php include "../vue/menu.php";?>

	    	<section class="row">
	    		<form action="../controleur/liste_des_articles.php" method="post">

				    <fieldset class="col-sm-4">
		    			<legend>Informatique</legend>

				    	<select name="liste_info" id="liste_info" size="10">
				    	<?php
				    	    	
				    	foreach ($liste_info as $temp_liste) {	
				    		
				    		echo "<option value =".$temp_liste["id_article"].">".$temp_liste["nom_article"]."</option>";		    		 
				    							
				    	}
				    	?>	

			    		</select>
			    		<br/><br/>

			    		<input class="btn btn-primary active" type ="submit" name= "modifier_info" value ="Modifier">
			    		<input class="btn btn-primary active" type ="submit" name="supprimer_info" value ="Supprimer">	    						    			 	
				    </fieldset>

				    <fieldset class="col-sm-4">
				    	<legend>Livres</legend>

				    	<select name="liste_livre" id="liste_livre" size="10">
				    	<?php
				    	    	
				    	foreach ($liste_livre as $temp_liste) {	
				    		
				    		echo "<option value =".$temp_liste["id_article"].">".$temp_liste["nom_article"]."</option>";		    		 
				    							
				    	}
				    	?>	

			    		</select>
			    		<br/><br/>

			    		<input class="btn btn-primary active" type ="submit" name= "modifier_livre" value ="Modifier">
			    		<input class="btn btn-primary active" type ="submit" name="supprimer_livre" value ="Supprimer"> 
			    		
				    </fieldset>

				    <fieldset class="col-sm-4">
				    	<legend>HI-FI</legend>

				    	<select name="liste_hifi" id="liste_hifi" size="10">
				    	<?php
				    	    	
				    	foreach ($liste_hifi as $temp_liste) {	
				    		
				    		echo "<option value =".$temp_liste["id_article"].">".$temp_liste["nom_article"]."</option>";		    		 
				    							
				    	}
				    	?>	
			    		</select>
			    		<br/><br/>

			    		<input class="btn btn-primary active" type ="submit" name="modifier_hifi" value ="Modifier">
			    		<input class="btn btn-primary active" type ="submit" name="supprimer_hifi" value ="Supprimer"> 			    		
				    </fieldset>	

			    </form>

			    <form class=".form-horizontal" action="../controleur/liste_des_articles.php" method="post">
			    	<fieldset class="col-sm-12">

			    		<legend>Informations sur le matériel</legend>			    		

			    		<input type="hidden" name="id_article" id="id_article"  value="<?php echo $detail_article["id_article"] ?>">			    	
			    	
			    	
			    		<div class="form-group">
				    		<label class="control-label col-sm-2" for="nom_article">Nom de l'article</label>
				    		<div class="col-sm-10">
				    			<input class="form-control" type="text" name="nom_article" id='nom_article' value="<?php 
				    			echo $detail_article["nom_article"]?>">
				    		</div>
				    	</div>	
			    		
				    	<div class="form-group">
				    		<label class="control-label col-sm-2" for="quantite_article">Quantité de l'article</label>
				    		<div class="col-sm-10">
					    		<input class="form-control" type="text" name="quantite_article" id='quantite_article' value="<?php 
					    		echo $detail_article["quantite_article"] ?>">
					    	</div>
					    </div>	

					    <div class="form-group">
				    		<label class="control-label col-sm-2" for="prix_article">Prix unitaire</label>
				    		<div class="col-sm-10">
					    		<input class="form-control" type="text" name="prix_article" id='prix_article' value="<?php  
					    		echo $detail_article["prix_article"] ?>">
					    	</div>	
			    		</div>

			    		<div class="form-group">
				    		<label class="control-label col-sm-2" for="description_article">Description de l'article</label>
				    		<div class="col-sm-10">
					    		<textarea class="form-control" rows="5" name="description_article"  id='description_article'><?php
					    		 echo $detail_article["description_article"] ?> </textarea>
					    	</div>
					    </div>

					    <div class="form-group">	
					    	<div class="col-sm-offset-2 col-sm-10">
				    			<input class="btn btn-primary active col-sm-2" type ="submit" name="enregistrer_article" value ="Enregistrer">
				    		</div>	
			    		</div>
			    	</fieldset>
			    </form>		    	
	    	</section>
	 
    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>