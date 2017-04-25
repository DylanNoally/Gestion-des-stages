<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
	//include 'view/includes/retourEnForce.php';

	include 'view/includes/avant_header.php';
?>
	<title>Choix de l'année</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<!-- Responsive -->
			<div style="float: left;">
				<?php include 'view/includes/responsiveMenuGauche.php'; ?>
			</div>

			<div class="nouvAnnee">
				<h1 class="laClasse"> // CLASSE(BD)  LISTE ELEVE DE LA CLASSE// </h1>
				<h2 align="center" style="margin-bottom: 40px;">Historique des élèves par année</h2>
					<form action="classe.php" method="GET">
						<div class="nouvAnnee_corps">
							<div class="nouvAnnee_annee">
								<label>Année :</label>
								<div class="nouvAnnee_annee_contenu">
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
								<div class="nouvAnnee_nouvelle_contenu">
									<input type="text" name="nouvelleAnnee" />
								</div>
							</div>
						</div>
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
