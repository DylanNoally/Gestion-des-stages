<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
//include 'view/includes/retourEnForce.php';

// On inclue le menu et la connexion à la page
include 'view/includes/header.php';
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
		
		<div id="interne_ref">
			<h1>Entreprises</h1>
			<h2>Ajouter un référent professionnel :</h2>

			<!-- Ajout d'un référent -->
			<div id="ecart1">
				<form method="POST" action="entreprise_ajou_ref_pro.php">
					<p>
						<label for="nom">Nom du référent</label> : 
						<div class="nomRef">
							<input type="text" name="nom" placeholder="Ex : AMMAR FETHI" />
						</div>
					</p>
			</div>


				<!-- Ajout de la fonction du référent -->
				<div id="ecart2">
					<p>
						<label for="fonction">Fonction</label> :
						<div class="nomFonction">
							<select name="fonction" id="fonction">
								<option value="Chef de projets">Chef de projets</option>
								<option value="Développeur web">Développeur web</option>
							</select>
						</div>
					</p>
				</div>

				<!-- Envoie du formulaire -->
				<div class="validation">
					<input type="submit" name="Valider">
				</div>
			</form>
		</div>
		<?php
		// On inclue le footer à la page
		include 'view/includes/footer.php';
		?>
	</div>
</div>

<?php
// On inclue le traitement du formulaire
include 'view/includes/traitementAjouRefPro.php';
?>
