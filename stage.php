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

			<div class="rechercheEleve">
				<h1>Rechercher un élève</h1>
				<br>
				<div class="formulaire">
					<form action="ensembleStages.php" method="GET" >
						<div class="annee">
							<label>Classe :</label>
							<div class="nomAnnee">
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
				        <br>

				        <div class="eleve">
							<label>Elève :</label>
							<div class="nomEleve"> 
						        <select name="eleve" id="eleve"> 
						            <?php 
						           		$query = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant, Id_etudiant FROM etudiant');
						           		$query->execute();
										$results = $query->fetchAll();
						           		foreach ($results as $eleve) 
						           		{
						           	?>

						           		<option value="<?php echo $eleve['Id_etudiant']; ?>">
											<?php echo $eleve['Prenom_etudiant']." ".$eleve['Nom_etudiant']; ?>
										</option>
									<?php
										}
									?>
								</select>
							</div>
						</div>

						<div class="recherche">
							<input type="submit" name="rechercheEleve" value="Rechercher">
						</div>
					</form>
				</div>
			</div>
			<?php 
				// On inclue le footer à la page
				include 'view/includes/footer.php';
			?>
		</div>
</div>