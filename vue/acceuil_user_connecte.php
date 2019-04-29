<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <?php include('../vue/head.php');?>

    <body>
    	<?php include('../vue/header.php');?> 

    	<?php include "../vue/menu.php";?>
    	
	    	

	    	<section class="contenu_de_la_page">
	    		<h2> Bonjour <?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?></h2>
	    		<p>
	    			La rentrée est passée, mais les promos n’ont pas dit leur dernier mot ! Grâce au Mois Carrefour, vous nous offrons jusqu’à 70% de réduction sur tous vos articles préférés.

					Il y a 18 ans tout pile, Rue du Commerce voyait le jour et lançait son site e-commerce. Nous souhaitons fêter cet anniversaire avec vous et vous gâter pour cette belle occasion : ventes flash, codes promos par milliers, nombreux jeux pour gagner des lots que vous allez adorer.

					Préparez votre liste d’envies et retrouvez nos prix imbattables sur l’ensemble de nos boutiques. Vous êtes amenés à changer votre électroménager qui commence à être vétuste ? Rue du Commerce vous propose des promotions des plus intéressantes. Suivez l’actualité du moment avec les nouveaux smartphones comme l’iphone 8 et X, le Galaxy Note 8 ou encore le Zenfone 4.

					Et en plus, nous livrons votre produit préféré dans le magasin Carrefour le plus proche de chez vous ! 
	    		</p>
	    		
	    	</section>
	 
    	<?php
            include('..\vue\footer.php');
        ?>
    
    
    </body>
</html>