<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<?php include('../vue/head.php');?>
<body>
	<?php include('../vue/header.php');?>

    <?php include "../vue/menu.php";?>
    
	<section class="container">
		<form action ="/../site_web/controleur/blog_news.php" method ="post" >
			<fieldset class="form-group">
				<legend>Recherche</legend>				
  				<label for="entrez_article">Entrez l'article à rechercher</label>
 				<input type="text" class="form-control" name="article_rechercher" id="article_rechercher">
 				<input type ="submit" class="btn btn-primary active"  name="bouton_ok" value ="OK"/>										
			</fieldset>				
		</form>		
	</section>

	<div class="container">
		<fieldset class="form-group">
			<legend>Liste des articles</legend>
			<?php			
			foreach ($materiel as $temp) {	
									
				echo "<div class=\"card\">";
				echo "<div class=\"card-body\">";
				echo "<p class=\"hidden\">".$temp["id_article"]."</p>";
				echo "<h4 class=\"card-title\">".$temp["nom_article"]."</h4>";
				echo "<p class=\"card-text\">".$temp["description_article"]."</p>";
				echo "<a href=\"../controleur/commentaire.php?id=".$temp["id_article"]."\" class=\"card-link\">Commentaires</a>";
				echo "</div>";
				echo "</div>";							
			}
			
				
			?>					

		</fieldset>

		
		
	</div>

	<?php
    		include('..\vue\footer.php');
    	?>

</body>
</html>