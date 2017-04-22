<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();
	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<!-- Responsive -->
			<div style="float: left;">
				<?php include 'view/includes/responsiveMenuGauche.php'; ?>
			</div>

			<div class="nouvAnnee">
				<h2 class="laClasse"> // CLASSE(BD)  LISTE ELEVE DE LA CLASSE// </h2>
					<br>
					
					<h2 align="center">Historique des élèves par année</h2>

					<br>
					<br>

					<form action="classe.php" method="GET" >
					<div class="nouvAnnee_corps">
						<div class="nouvAnnee_annee">
							<label>Année :</label>
							<div class="annee_contenu">
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

					    <div class="nouvAnnee_nouvelle">
							<label>Ou nouvelle : </label> 
							<div class="nouvelle_contenu">
								<input type="text" name="nouvelleAnnee" />
							</div>
						</div>
					</div>
						<br>
						<div class="nouvAnnee_valider">
							<input type="submit" name="historiqueEleveValider" value="Valider">
						</div>
					</form>
				</div>
			<?php 
				// On inclue le footer à la page
				include 'view/includes/footer.php';
			?>
		</div>
</div>
