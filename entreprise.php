<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();
	
	include 'view/includes/avant_header.php';
?>
	<title>Recherche et ajout d'une entreprise</title>
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

			<div class="entreprise">
					<h1 class="entreprise_titre">Entreprises</h1>
						
					<div class="recherche_entreprise">
						<h2 style="margin-bottom: 30px;">Rechercher une entreprise </h2>
						<form action="informationsEntreprise.php" method="GET" >
							<label>Nom de l'entreprise :</label>
							<div class="entreprise_nom">
						        <select name="entrepriseExistante" id="entrepriseExistante">
						           <?php 
				           			$query = $bdd->prepare('SELECT Id_entreprise, Nom_entreprise FROM entreprise');
				           			$query->execute();
				           			$resultatNomEntreprise = $query->fetchAll();
									
						        	foreach ($resultatNomEntreprise as $nomEntreprise) 
				           			{
									?>

		        					<option value="<?php echo $nomEntreprise['Id_entreprise']; ?>">
		    							<?php echo $nomEntreprise['Nom_entreprise']; ?>
		        					</option>
		    						<?php
									}
									?>
						        </select>
						    </div>
					        <div class="entreprise_rechercher">
					        	<input type="submit" name="rechercheEntreprise" value="Rechercher">
					        </div>
					    </form>
				</div>

				<div class=nouvelle_entreprise>
					<h2 style="margin-bottom: 30px;">Nouvelle entreprise</h2>

						<form action="informationsEntreprise.php" method="POST" >
							Nom de l'entreprise :<input style="margin-left: 30px;" type="text" name="nouvelleEntreprise">

							<div class="chiffreAffaires">
								Chiffre d'affaires :<input style="margin-left: 47px;" type="text" name="chiffreAffaires">
							</div>

							Adresse postale :<input style="margin-left: 54px;" type="text" name="adressePostale">

							<div class="entreprise_valider">
								<input type="submit" name="creerEntreprise" value="Valider">
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