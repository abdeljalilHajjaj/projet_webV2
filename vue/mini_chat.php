<!DOCTYPE html>

<html>
<?php include('../vue/head.php');?>
<body>
	<?php include('../vue/header.php');?>

    <?php include "../vue/menu.php";?>

	<section class="section_pseudo">
		<form method="POST" action="../controleur/mini_chat.php">
			<fieldset class="form_pseudo_message">
				<legend>Mini-Chat</legend>
				<br/>
	    		<label for="pseudo">Pseudo :</label>
	    		<br/>
	    		<input type="text" class="form-control" name="pseudo" id="pseudo" 
		    		<?php if (isset($_SESSION["pseudo_chat"]))
		    					echo"value=".$_SESSION["pseudo_chat"];?>>
	    		<label for="message">Message :</label>
	    		<br/>
	    		<textarea class="form-control" rows="5"  name="message" id="message"></textarea>
	    		<br/><br/>
	    		<input type="submit" class="btn btn-primary active" name="envoyer" id="envoyer" Value="Envoyer">				
			</fieldset>			
		</form>		
	</section>

	<section class="section_message">
		<form>
			<fieldset class="liste_des_messages">
				<legend>Liste des messages</legend>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Pseudo</th>
							<th>Messages</th>
						</tr>
						<?php 
						if (isset($liste_messages)) {
							foreach ($liste_messages as $temp_messages) {
								echo "<tr>";
								echo "<td>".$temp_messages['pseudo']."</td>";
								echo "<td>".$temp_messages['message']."</td>";
								echo "</tr>";
							}
						}						

						?>
					</thead>
					
				</table>
				
			</fieldset>
			
		</form>
		
	</section>
	
	<?php
    		include('..\vue\footer.php');
    	?>

</body>
</html>