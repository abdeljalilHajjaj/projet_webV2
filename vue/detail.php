<!DOCTYPE html>
<html>
    
	<?php include('../vue/head.php');?>
    
    <body>
    	<?php include('../vue/header.php');?>    	
    	<?php include ('../vue/menu.php');?>

	    
    	<div class = "container">
    		<section class="container col-sm-8">
                <h3>Commande n°<?php 
                    if($detail_achats[0]['id_commande']!=null){
                        echo  $detail_achats[0]['id_commande'];
                    } 
                    ?>
                </h3>

                <h4>Date <?php echo $detail_achats[0]['date_commande']?></h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Quantité</th>
                            <th>Prix(€)</th>                                                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($detail_achats != null){
                                foreach ($detail_achats as $achat){

                                echo '<tr>';
                                echo '<td align="left">'.$achat['nom_article'].'</td>';
                                echo '<td align="left" ">'.$achat['quantite_commande'].'</td>';
                                echo '<td align="left">'.$achat['prix_article'].'</td>';         
                                echo '</tr>';                             

                                }

                            }
                            else{
                                echo 'Pas de détails pour cette commande !' ;
                            }                       


                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td align="left"><strong>Total</strong></td>
                            <td></td>
                            <td align="left">
                                <strong><?php echo $detail_achats[0]['prix_commande'].' €' ?></strong>
                            </td>          
                        </tr>                       
                    </tfoot>
                </table>
    			
	    	</section>

            <a href=<?php 
                    if ($_SESSION['login']=='ADMIN'){
                         echo  '../controleur/liste_des_utilisateurs.php';                            
                    }
                    else{
                        echo "../controleur/mes_achats.php";
                    }  

            ?>
            >Retour</a>		    
    	</div>	    	    		
	    		
	    
	 
    	<?php
    		include('..\vue\footer.php');
    	?>
    
    
    </body>
</html>