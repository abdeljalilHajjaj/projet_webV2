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
	    		<form action="../controleur/liste_des_utilisateurs.php" method="post">
		    		<fieldset>
		    			<legend>Liste des utilisateurs</legend>

				    	<select name="liste_utilisateurs" id="liste_utilisateurs" size="10">
				    	<?php
				    	    	
				    	foreach ($liste_des_utilisateurs as $temp_liste) {	
				    		
				    		echo "<option value =".$temp_liste["login"].">".$temp_liste["login"]."</option>";		    		 
				    							
				    	}
				    	?>	

			    		</select>
			    		<br/><br/>

			    		<input type ="submit" class="btn btn-primary active" name="afficher_details"     	value ="Afficher détails"> 
			    		<input type ="submit" class="btn btn-primary active" name= "bloquer_utilisateur" 	value ="Bloquer utilisateur">
			    		<input type ="submit" class="btn btn-primary active" name= "debloquer_utilisateur" value ="Débloquer utilisateur">		    			
				    	
				    </fieldset>

				    <fieldset>
				    	<legend>Détail de l'utilisateur</legend>
				    	<table class="table table-striped">
				    		<th>Id</th>
				    		<th>Login</th>
				    		<th>Nom</th>
				    		<th>Prénom</th>
				    		<th>Adresse</th>	
				    		<th>Code Postal</th>
				    		<th>Adresse email</th>
				    		<th>Bloquer</th>

				    		<tr>
				    			<?php
				    			if(!is_null($detail_utilisateur)){
				    				echo "<td>".$detail_utilisateur["id_utilisateur"]."</td>";
					    			echo "<td>".$detail_utilisateur["login"]."</td>";
					    			echo "<td>".$detail_utilisateur["nom"]."</td>";
					    			echo "<td>".$detail_utilisateur["prenom"]."</td>";
					    			echo "<td>".$detail_utilisateur["adresse"]."</td>";
					    			echo "<td>".$detail_utilisateur["code_postal"]."</td>";
					    			echo "<td>".$detail_utilisateur["adresse_email"]."</td>";
					    			if ($detail_utilisateur["bloquer"]==0){
					    				echo "<td>Non</td>";
					    			}
					    			else
					    				echo "<td>Oui</td>";
					    			
				    			}    			
				    			
				    			?>				    			
				    		</tr>

				    	</table>
				    </fieldset>

				    <fieldset>
				    	<legend>Connexion des utilisateurs</legend>
				    	<table class="table table-striped">
				    		
				    		<th>Nombre de connexions aujourdhui</th>
				    		<th>Nombre de connexions lors des sept derniers jours</th>
				    		

				    		<tr>
				    			<?php
				    			if(!is_null($detail_utilisateur)){
				    				echo "<td>".$nbr_connexion_aujourdhui."</td>";
					    			echo "<td>".$nbr_connexion_7jours."</td>";    				
				    			}    			
				    			
				    			?>				    			
				    		</tr>

				    	</table>
				    </fieldset>

			    </form>		    	
	    	</section>

	    	
    		<section class="container col-sm-12">
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
        	    	
	 
    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>