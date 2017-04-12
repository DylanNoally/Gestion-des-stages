<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On inclue le menu et la connexion à la page
include 'view/includes/header.php';
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<div id="interne_ref">
			<h1>Entreprises</h1>
			<h2>Ajouter un référent professionnel :</h2>

			<!-- Ajout d'un référent -->
			<div id="ecart1">
				<form method="POST" action="entreprise_ajou_ref_pro.php">
					<p>
						<label for="nom">Nom du référent</label> : <input type="text" name="nom" id="nom" id="prenom" placeholder="Ex : AMMAR FETHI" />
					</p>
			</div>


				<!-- Ajout de la fonction du référent -->
				<div id="ecart2">
					<p>
						<label for="fonction">Fonction</label> :
						<select name="fonction" id="fonction">
							<option value="Chef de projets">Chef de projets</option>
							<option value="Développeur web">Développeur web</option>
						</select>
					</p>
				</div>

				<!-- Envoie du formulaire -->
					<input type="submit" name="Valider">
			</form>
		</div>
	</div>
</div>

<?php
// On inclue le traitement du formulaire
include 'view/includes/traitementAjouRefPro.php';

// On inclue le footer à la page
include 'view/includes/footer.php';
?>