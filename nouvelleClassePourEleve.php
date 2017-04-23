<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
	//include 'view/includes/retourEnForce.php';

	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<!-- Responsive -->
			<div style="float: left;">
				<?php include 'view/includes/responsiveMenuGauche.php'; ?>
			</div>

			<div class="nouvClassePourEleve">
				<h1 class="nouvClassePourEleve_titre">// NOM ELEVE(BD) //</h1>
				<h2 class="nouvClassePourEleve_sous_titre">Associer l'élève a une nouvelle classe</h2>
					<form action="index.php" method="POST">
						<div class="nouvClassePourEleve_corps">
							<div class="nouvClassePourEleve_classe">
								<label>Classe :</label>
								<div class="nouvClassePourEleve_classe_contenu">
					        		<select name="classe" id="classe">
						        		<?php 
						           			$query = $bdd->prepare('SELECT Nom_classe, Id_classe FROM classe');
						           			$query->execute();
						           			$results = $query->fetchAll();
						           			foreach ($results as $classe) 
						           			{
										?>

				        					<option value="<?php echo $classe['Id_classe']; ?>">
				    							<?php echo $classe['Nom_classe']; ?>
				        					</option>
				    					<?php
											}
										?>
					        		</select>
					        	</div>
					        </div>

					        <div class="nouvClassePourEleve_annee">
					        	<label>Année :</label>
					        	<div class="nouvClassePourEleve_annee_contenu">
						           	<select name="annee" id="annee">
							           	<?php 
						           			$query = $bdd->prepare('SELECT Id_date_annee, Annee FROM annee');
						           			$query->execute();
						           			$resultatAnnee = $query->fetchAll();
								        	foreach ($resultatAnnee as $Annee) 
						           			{
											?>

				        					<option value="<?php echo $Annee['Id_date_annee']; ?>">
				    							<?php echo $Annee['Annee']; ?>
				        					</option>
				    						<?php
											}
										?>
						           </select>
					           </div>
					        </div>
					    </div>
						<div class="nouvClassePourEleve_valider">
				    		<input type="submit" name="historiqueEleveValider" value="Valider" />
				    	</div>
				    </form>
			</div>
			<?php 
				// On inclue le footer à la page
				include 'view/includes/footer.php';
			?>
		</div>
</div>
