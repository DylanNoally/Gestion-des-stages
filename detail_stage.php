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
		<div id="interne">
			<h1>Jean Marc Dupont - BTS 1</h1>
			<h2>Visites liées au stage</h2>

			<p><b>Observations :</b></p>

			<!-- Bouton "Nouvelle visite" qui nous redirigera vers la page "Ajout d'une visite"-->
			<p><a href="ajoutVisite.php"><img src="public/img/bouton_nv_visite.png" alt="Image bouton nouvelle visite" title="Nouvelle visite"></a></p>
		</div>
	</div>			
</div> 