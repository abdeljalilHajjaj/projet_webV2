<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	 	<script type="text/javascript" src="../controleur/panier.js"></script>
  	 	<script type="text/javascript">
  	 		function ajouter(index)
  	 		{
  	 			var code = document.getElementById("id"+index).innerHTML;  	 			
                var qte =1;
                var prix = parseInt(document.getElementById("prix"+index).innerHTML);
                var nom=document.getElementById("nom"+index).innerHTML;
                var monPanier = new Panier();


                monPanier.ajouterArticle(code,nom, prix, qte);
                var tableau = document.getElementById("tableau");
                var longueurTab = parseInt(document.getElementById("nbreLignes").innerHTML);
                if (longueurTab > 0)
                {
                    for(var i = longueurTab ; i > 0  ; i--)
                    {
                        monPanier.ajouterArticle(tableau.rows[i].cells[0].innerHTML, tableau.rows[i].cells[1].innerHTML, parseInt(tableau.rows[i].cells[3].innerHTML),parseInt(tableau.rows[i].cells[2].innerHTML));
                        tableau.deleteRow(i);
                       
                    }
                }
                var longueur = monPanier.liste.length;
                for(var i = 0 ; i < longueur ; i++)
                {
                    var ligne = monPanier.liste[i];
                    var ligneTableau = tableau.insertRow(-1);
                    var colonne1 = ligneTableau.insertCell(0);
                    colonne1.innerHTML += ligne.getCode();
                    var colonne2 = ligneTableau.insertCell(1);
                    colonne2.innerHTML += ligne.nomArticle;
                    var colonne3 = ligneTableau.insertCell(2);
                    colonne3.innerHTML += ligne.qteArticle;
                    var colonne4 = ligneTableau.insertCell(3);
                    colonne4.innerHTML += ligne.prixArticle ;                    
                    var colonne5 = ligneTableau.insertCell(4);
                    colonne5.innerHTML += ligne.getPrixLigne();
                    var colonne6 = ligneTableau.insertCell(5);
                    colonne6.innerHTML += "<button class=\"btn btn-primary\" type=\"submit\" onclick=\"supprimer(this.parentNode.parentNode.cells[0].innerHTML)\"><span class=\"glyphicon glyphicon-remove\"></span> Retirer</button>";
                }
                document.getElementById("prixTotal").innerHTML = monPanier.getPrixPanier()+" €";
                document.getElementById("nbreLignes").innerHTML = longueur;                  
                
  	 		}

  	 		 function supprimer(code)
            {
                var monPanier = new Panier();
                var tableau = document.getElementById("tableau");
                var longueurTab = parseInt(document.getElementById("nbreLignes").innerHTML);
                if (longueurTab > 0)
                {
                    for(var i = longueurTab ; i > 0  ; i--)
                    {
                        monPanier.ajouterArticle(tableau.rows[i].cells[0].innerHTML, tableau.rows[i].cells[1].innerHTML, parseInt(tableau.rows[i].cells[3].innerHTML),parseInt(tableau.rows[i].cells[2].innerHTML));
                        tableau.deleteRow(i);
                    }
                }
                monPanier.supprimerArticle(code);
                var longueur = monPanier.liste.length;
                for(var i = 0 ; i < longueur ; i++)
                {
                    var ligne = monPanier.liste[i];
                    var ligneTableau = tableau.insertRow(-1);
                    var colonne1 = ligneTableau.insertCell(0);
                    colonne1.innerHTML += ligne.getCode();
                    var colonne2 = ligneTableau.insertCell(1);
                    colonne2.innerHTML += ligne.nomArticle;
                    var colonne3 = ligneTableau.insertCell(2);
                    colonne3.innerHTML += ligne.qteArticle;
                    var colonne4 = ligneTableau.insertCell(3);
                    colonne4.innerHTML += ligne.prixArticle ;                    
                    var colonne5 = ligneTableau.insertCell(4);
                    colonne5.innerHTML += ligne.getPrixLigne();
                    var colonne6 = ligneTableau.insertCell(5);
                    colonne6.innerHTML += "<button class=\"btn btn-primary\" type=\"submit\" onclick=\"supprimer(this.parentNode.parentNode.cells[0].innerHTML)\"><span class=\"glyphicon glyphicon-remove\"></span> Retirer</button>";
                }
                document.getElementById("prixTotal").innerHTML = monPanier.getPrixPanier()+" €";
                document.getElementById("nbreLignes").innerHTML = longueur;
            }


  	 	</script>	
        <title>Vente en ligne de matériels informatique</title>
    </head>

    <body>
    	<header class="jumbotron text-center">
    		<h1>Vente en ligne de matériels</h1>
    		
    	</header>

    	<?php include "../vue/menu.php";?>	

	    <div class="container col-sm-8">  
	    
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
		 						echo '<td id="'."id".$i.'">'.$info['id_article'].'</td>';	
		 						echo '<td id="'."nom".$i.'">'.$info['nom_article'].'</td>';
		 						echo '<td id="'."prix".$i.'">'.$info['prix_article']."€".'</td>'; 
		 						echo '<td>'	;			 						
		 						echo '<button class="btn btn-primary pull-right"type="submit"onclick="ajouter('.$i.')"'.' id="bt_achat_info" name="bt_achat_info">  
		 						<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
		 						echo '</td>';
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
			 						echo '<td id="'."id".$i.'">'.$livre['id_article'].'</td>';	
			 						echo '<td id="'."nom".$i.'">'.$livre['nom_article'].'</td>';
			 						echo '<td id="'."prix".$i.'">'.$livre['prix_article']."€".'</td>'; 
			 						echo '<td>'	;			 						
			 						echo '<button class="btn btn-primary pull-right"type="submit"onclick="ajouter('.$i.')"'.' id="bt_achat_livre" name="bt_achat_livre">  
			 						<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
			 						echo '</td>';
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
			 						echo '<td id="'."id".$i.'">'.$hifi['id_article'].'</td>';	
			 						echo '<td id="'."nom".$i.'">'.$hifi['nom_article'].'</td>';
			 						echo '<td id="'."prix".$i.'">'.$hifi['prix_article']."€".'</td>'; 
			 						echo '<td>'	;			 						
			 						echo '<button class="btn btn-primary pull-right"type="submit"onclick="ajouter('.$i.')"'.' id="bt_achat_hifi" name="bt_achat_hifi">  
			 						<span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
			 						echo '</td>';
			 						echo "</tr>";
			 						echo "</article>";
			 						$i++;
			 					}

			 				?>	 				
			 			</tbody>
			 		</table>
			 	</div>		 	
		</div> 

		<div class="container col-sm-4">
	            <legend>Panier</legend>
	            <table id="tableau" class="table">
	                <thead>
	                    <tr>
	                        <th>Réf</th>
	                        <th>Produit</th>
	                        <th>Qte</th>
	                        <th>Prix</th>
	                        <th>Prix total articles</th>
	                        <th>Supprimer</th>
	                    </tr>
	                </thead>
	            </table>
	            <br><label>Prix du panier total</label> : <label id = "prixTotal"></label>
	            <label id = "nbreLignes" hidden>0</label>
	    </div>  

    	
    
    </body>
</html>