<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
include 'view/includes/retourEnForce.php';
// On inclue le menu et la connexion à la page
include 'view/includes/header.php';
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<div id="interne">
			<h1>Jean Marc Dupont - BTS 1</h1>
			<h2>Visites liées au stage</h2>

			<!-- Bouton "Nouvelle visite" qui nous redirigera vers la page "Ajout d'une visite"-->
			<p><a href="#"><img src="public/img/bouton_nv_visite.png" alt="Image bouton nouvelle visite" title="Nouvelle visite"></a></p>

			<?php
			// Traiter et afficher une donnée de la basse de données :
			// Afficher la première observation de la table "visite" dans PHPMyAdmin
			$query = $bdd->prepare('SELECT Observations_visite FROM visite '); 
			$query->execute();
			// Afficher la première observation de la table "visite" dans la page web
			while ($results = $query->fetch()) {
				echo "<br /><br />Observation :<br />";
				echo $results['Observations_visite'];
			}
			?>
		</div>
	</div>			
</div> 


<?php
/** Version sans base de données
// Traitement des données reçus par le formulaire d'observation de la page "Ajout d'une viste"
// Vérification de l'existance du texte du formulaire
if (isset($_POST['observation']) == 0) {
	
	// Si,il y a bien un texte de validé, afficher ce texte 
	echo ($_POST['observation']);
}
// Vérification de l'existance de la date saisie
if (isset($_POST['date']) == 0) {
	
	// Si,il y en a bien une, afficher cete date 
	echo ($_POST['date']);
}
?>
**/
?>


<?php 
// On inclue le footer à la page
include 'view/includes/footer.php';
?>