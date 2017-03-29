<!-- Inclusion des éléments de la page -->

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
				<form method="get" action="traitement.php">
					<p>
						<label for="nom">Nom du référent</label> : <input type="text" name="nom" id="nom" placeholder="Ex : Fethi Ammar" />
					</p>
			</div>


				<!-- Ajout de la fonction du référent -->
				<div id="ecart2">
					<p>
						<label for="fonction">Fonction</label> :
						<select name="fonction" id="fonction">
							<option value="chef">Chef de projets</option>
						</select>
					</p>
				</div>

				<!-- Envoie du formulaire -->
					<input type="submit" name="Valider" />
			</form>
		</div>
	</div>
</div>