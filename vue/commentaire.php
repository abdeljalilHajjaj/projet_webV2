<!DOCTYPE html>
<html>
<?php include('../vue/head.php');?>
<body>
	<?php include('../vue/header.php');?> 

    <?php include "../vue/menu.php";?>
	

	<div class="container">
		<form action ="/../site_web/controleur/commentaire.php " method ="post">
			<fieldset class="col-sm-12">
				<legend>Commentaires</legend>
				<?php
					
					foreach ($liste_commentaire as $temp_comment ) {
						echo "<div class="."\"panel panel-default\"".">";
	  					echo "<div class="."\"panel-heading\"".">".$temp_comment["auteur_comment"]." ".$temp_comment["date_comment"]."</div>";
	  					echo "<div class="."\"panel-body\"".">".$temp_comment["nom_comment"]."</div>";
						echo "</div>";
						}
				
				?>
				
				
				<input type="hidden" name="id" value= "<?php echo $_GET["id"];?>" >
				<input type="text" class="form-control" name="commentaire" id="commentaire">
				<div class="pull-right">
					<input type ="submit" class="btn btn-primary active"  name="bouton_envoyer" value ="Envoyer"/>
				</div>	
			</fieldset>
		</form>		
	</div>

	<?php
    		include('..\vue\footer.php');
    	?>

</body>
</html>