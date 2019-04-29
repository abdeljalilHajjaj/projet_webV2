
<!DOCTYPE html>
<html>
<?php include('../vue/head.php');?>
<body>
	<?php include "../vue/header.php";?>	
	<?php include "../vue/menu.php";?>


	<div class="container col-sm-12">  
	    
		 	<div class="container col-sm-12">
		 		
		 		<h2>Informatique</h2>
		 		
			 		<table class="table table-striped">
			 			<thead>
			 				<tr>
			 					<th>ID</th>
			 					<th>Nom de l'article</th>
			 					<th>Prix en (Euro)</th>
			 				</tr>
			 			</thead>
			 			

			 			<tbody>
			 				<?php 
			 					$i=0;
			 					foreach ($article_info as $info){
			 						
			 						echo "<article>";
			 						echo "<tr>";
			 						echo '<form action="../controleur/boutique.php" method="POST">';
			 						echo '<input type="hidden" name="id_article"'.'value='.$info['id_article'].'>';
			 						echo '<td align="left" name="id_article"'.'>'.$info['id_article'].'</td>';
			 						echo '<input type="hidden" name="nom_article"'.'value="'.$info['nom_article'].'"'.'>';
			 						echo '<td align="left" name="nom_article"'.'>'.$info['nom_article'].'</td>';
			 						echo '<input type="hidden" name="prix_article"'.'value='.$info['prix_article'].'>';
			 						echo '<td align="left" name="prix_article"'.'>'.$info['prix_article']."€".'</td>'; 
			 						echo '<td>';			 						
			 						echo '<button class="btn btn-primary pull-right"type="submit"'.' id="bt_achat" name="bt_achat">  
			 						<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
			 						echo '</td>';
			 						echo'</form>';
			 						echo "</tr>";
			 						echo "</article>";
			 						$i++;
			 						
			 					}
			 				?>	 
			 				

			 			</tbody>
			 		</table>
		 		
		 	</div>	
		 		
		 	
			 	<div class="container col-sm-12">
			 		<h2>Livres</h2>
			 		<table class="table table-striped">
			 			<thead>
			 				<tr>
			 					<th>ID</th>
			 					<th>Nom de l'article</th>
			 					<th>Prix en (Euro)</th>
			 				</tr>
			 			</thead>
			 			<tbody>
			 				<?php
			 					foreach ($article_livre as $livre) {
			 						echo "<article>";
			 						echo "<tr>";
			 						echo '<form action="../controleur/boutique.php" method="POST">';

			 						echo '<input type="hidden" name="id_article"'.'value='.$livre['id_article'].'>';
			 						echo '<td align="left" name="id_article"'.'>'.$livre['id_article'].'</td>';
			 						echo '<input type="hidden" name="nom_article"'.'value="'.$livre['nom_article'].'">';
			 						echo '<td align="left" name="nom_article"'.'>'.$livre['nom_article'].'</td>';
			 						echo '<input type="hidden" name="prix_article"'.'value='.$livre['prix_article'].'>';
			 						echo '<td align="left" name="prix_article"'.'>'.$livre['prix_article']."€".'</td>'; 
			 						echo '<td>';			 						
			 						echo '<button class="btn btn-primary pull-right"type="submit"'.' id="bt_achat" name="bt_achat">  
			 						<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
			 						echo '</td>';
			 						echo'</form>';
			 						echo "</tr>";
			 						echo "</article>";
			 						$i++;
			 					}

			 				?>	 				
			 			</tbody>
			 		</table>
			 	</div> 

			 	<div class="container col-sm-12">
			 		<h2>Hifi</h2>
			 		<table class="table table-striped">
			 			<thead>
			 				<tr>
			 					<th>ID</th>
			 					<th>Nom de l'article</th>
			 					<th>Prix en (Euro)</th>
			 				</tr>
			 			</thead>
			 			<tbody>
			 				<?php
			 					foreach ($article_hifi as $hifi) {
			 						echo "<article>";
			 						echo "<tr>";
			 						echo '<form action="../controleur/boutique.php" method="POST">';
			 						echo '<input type="hidden" name="id_article"'.'value='.$hifi['id_article'].'>';
			 						echo '<td align="left" name="id_article"'.'>'.$hifi['id_article'].'</td>';
			 						echo '<input type="hidden" name="nom_article"'.'value="'.$hifi['nom_article'].'">';
			 						echo '<td align="left" name="nom_article"'.'>'.$hifi['nom_article'].'</td>';
			 						echo '<input type="hidden" name="prix_article"'.'value="'.$hifi['prix_article'].'">';
			 						echo '<td align="left" name="prix_article"'.'>'.$hifi['prix_article']."€".'</td>'; 
			 						echo '<td>';			 						
			 						echo '<button class="btn btn-primary pull-right"type="submit"'.' id="bt_achat" name="bt_achat">  
			 						<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
			 						echo '</td>';
			 						echo'</form>';
			 						echo "</tr>";
			 						echo "</article>";
			 						$i++;
			 					}

			 				?>	 				
			 			</tbody>
			 		</table>
			 	</div>		 	
		</div>
	</div>	

<?php include "../vue/footer.php";?>
</body>
</html>