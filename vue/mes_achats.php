<!DOCTYPE html>
<html>
    
	<?php include('../vue/head.php');?>
    <body>
    	<?php include('../vue/header.php');?>    	
    	<?php include ('../vue/menu.php');?>

	    
    	<div class = "container">
    		<section class="container col-sm-6">
    			<table class="table table-striped">
		 			<thead>
		 				<tr>
		 					<th>N° Commande</th>
		 					<th>Date</th>
		 					<th>Total (en €)</th>
		 					<th>Détails</th>		 					
		 				</tr>
		 			</thead>
		 			<tbody>
		 				<?php
		 					if ($liste_achats != null){
		 						foreach ($liste_achats as $achat){

		 						echo '<tr>';
		 						echo '<td align="left">'.$achat['id_commande'].'</td>';
		 						echo '<td align="left" ">'.$achat['date_commande'].'</td>';
		 						echo '<td align="left">'.$achat['prix_commande'].'</td>'; 						
		 						echo '<td align="left"><a href="../controleur/detail.php?id='.$achat['id_commande'].'"'.'>détails</td>';
		 						echo '</tr>';

		 						}

		 					}
		 					else{
		 						echo 'Vous n avez pas d achats pour le moment !' ;
		 					}	 					


		 				?>
		 			</tbody>
		 		</table>	    			
	    	</section>		    
    	</div>	    	    		
	    		
	    
	 
    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>