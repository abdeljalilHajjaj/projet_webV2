<!DOCTYPE html>
<html>
    <?php include('../vue/head.php');?>

    <body>
    	<?php include('../vue/header.php');?>
    		
    	<?php include "../vue/menu.php";?>

	
		 	<div class="container">
		 		<h2>Panier</h2>

		 		<form  method="POST" action="../controleur/panier.php">
		 		<table class="table table-striped">
		 			<thead>
		 				<tr>
		 					<th>ID</th>
		 					<th>Nom de l'article</th>
		 					<th>Prix en (Euro)</th>
		 					<th>Quantité</th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 				<?php
		 				
		 				$total=0;
		 				if (!isset($_SESSION['panier'])){
		 					echo ' Le panier est vide !';
		 				}
		 				else{	 					

		 					for ($i=0; $i <count($_SESSION['panier']['id_article']) ; $i++) { 
			 					echo '<tr>';
				 				echo '<td align="left">'.$_SESSION['panier']['id_article'][$i].'</td>';			 				
				 				echo '<td align="left"'.'>'.$_SESSION['panier']['nom_article'][$i].'</td>';
				 				
				 				echo '<td align="left">'.$_SESSION['panier']['prix_article'][$i].' €'.'</td>';
				 				
				 				echo '<td align="left">'.$_SESSION['panier']['quantite_article'][$i].'</td>';
			 					echo '</tr>';

			 					$total=$total+$_SESSION['panier']['prix_article'][$i]*$_SESSION['panier']['quantite_article'][$i];	 			
		 					}	 					

		 				}
		 						 				
		 				?>
		 					
		 			</tbody>
		 			<tfoot>
		 				<tr>
		 			    <td>
		 			    	<input type="hidden" name ="total" value = <?php echo $total ?>>
		 			    	<strong><?php echo "Total :".$total." €"; ?></strong>
		 			    </td>
		 				</tr>
		 			</tfoot>
		 		</table>

		 			
		 				<?php
		 			  		if ($total != 0){
		 			  			echo '<button type="submit"  name="acheter" class="btn btn-success">Acheter maintenant</button>';
		 			  		}
		 				?>		 				
		 		</form>
		 			
		 			
		 		
		 		<p class="text-danger">Attention pour effectuer des achats il faut être authentifié !</p>
		 	</div>

	 	
	

    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>