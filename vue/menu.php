<?php

if(!isset($_SESSION['nom'])){

	echo'<nav class='.'"'.'navbar navbar-inverse'.'"'.'>'.
	    	'<div class='.'"'.'container-fluid'.'"'.'>'. 
		    	'<ul class='.'"'.'nav navbar-nav'.'"'.'>'.
		    		'<li><a href='.'"'.'../vue/acceuil.php'.'"'.'>Acceuil</a></li>'.
		    		'<li><a href='.'"'.'../controleur/mini_chat.php'.'"'.'>Mini-chat</a></li>
		    		<li><a href='.'"'.'../controleur/blog_news.php'.'"'.'>Blog/news</a></li>
		    		<li><a href='.'"'.'../controleur/achat_materiels.php'.'"'.'>Vente de matériels</a></li>
		    		<li><a href='.'"'.'../controleur/boutique.php'.'"'.'>Boutique</a></li>		    		
		    		<li><a href='.'"'.'../controleur/panier.php'.'"'.'><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
		    		<li><a href='.'"'.'../vue/acceuil.php'.'"'.'>s inscrire / se connecter</a></li>
		    	</ul>
		    </div>	    		
	</nav>';
}else{
	if ($_SESSION['login']=="ADMIN"){
		echo'<nav class='.'"'.'navbar navbar-inverse'.'"'.'>'.
		    	'<div class='.'"'.'container-fluid'.'"'.'>'. 
			    	'<ul class='.'"'.'nav navbar-nav'.'"'.'>'.
			    		'<li><a href='.'"'.'../vue/acceuil_user_connecte.php'.'"'.'>Acceuil</a></li>'.
			    		'<li><a href='.'"'.'../controleur/mini_chat.php'.'"'.'>Mini-chat</a></li>
			    		<li><a href='.'"'.'../controleur/blog_news.php'.'"'.'>Blog/news</a></li>
			    		<li><a href='.'"'.'../controleur/achat_materiels.php'.'"'.'>Vente de matériels</a></li>
			    		<li><a href='.'"'.'../controleur/liste_des_utilisateurs.php'.'"'.'>Liste des utilisateurs</a></li>
			    		<li><a href='.'"'.'../controleur/ajouter_article.php'.'"'.'>Editer des articles</a></li></li>
			    		<li><a href='.'"'.'../controleur/liste_des_articles.php'.'"'.'>Liste des articles</a></li></li>
			    		<li><a href='.'"'.'../controleur/boutique.php'.'"'.'>Boutique</a></li>
			    		<li><a href='.'"'.'../controleur/deconnexion.php'.'"'.'>Deconnexion</a></li>

			    	</ul>
			    </div>	    		
		</nav>';

	}else{
		echo'<nav class='.'"'.'navbar navbar-inverse'.'"'.'>'.
		    	'<div class='.'"'.'container-fluid'.'"'.'>'. 
			    	'<ul class='.'"'.'nav navbar-nav'.'"'.'>'.
			    		'<li><a href='.'"'.'../vue/acceuil_user_connecte.php'.'"'.'>Acceuil</a></li>'.
			    		'<li><a href='.'"'.'../controleur/mini_chat.php'.'"'.'>Mini-chat</a></li>
			    		<li><a href='.'"'.'../controleur/blog_news.php'.'"'.'>Blog/news</a></li>
			    		<li><a href='.'"'.'../controleur/achat_materiels.php'.'"'.'>Vente de matériels</a></li>
			    		<li><a href='.'"'.'../vue/modification_profil.php'.'"'.'>Modifier profil</a></li>	
			    		<li><a href='.'"'.'../controleur/boutique.php'.'"'.'>Boutique</a></li>
			    		<li><a href='.'"'.'../controleur/mes_achats.php'.'"'.'>Mes achats</a></li>
			    		<li><a href='.'"'.'../controleur/panier.php'.'"'.'><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>	    		
			    		<li><a href='.'"'.'../controleur/deconnexion.php'.'"'.'>Deconnexion</a></li>

			    	</ul>
			    </div>	    		
		</nav>';

	}

}





