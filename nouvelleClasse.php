<!-- Inclusion des éléments de la page -->

<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();
	
	// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
	//include 'view/includes/retourEnForce.php';

	include 'view/includes/avant_header.php';
?>
	<title>Ajouter une nouvelle classe</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
	include 'view/includes/traitementNouvelleClasse.php';
?>

<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
		<h1 class="nouvelleClasse_titre">Suivi scolarité</h1>
		<div id="nouvelleClasse_corps">
			<h3 class="nouvelleClasse_corps_titre">Ajouter une nouvelle classe</h3>
			<form class="nouvelleClasse_formulaire" method="post" action="classe.php">
				<div class="nouvelleClasse_reinitialiser">
					<input type="reset" name="BoutonReset" value="Réinitialiser" onclick="nouvelleClasse.php">
				</div>
				<div class="typeBAC_input">
					Libellé : <input type="text" class="text1" name="LibelléClasse">
				</div>
				<div class="nouvelleClasse_valider">
					<input type="submit" name="BoutonAjoutClasse" value="Valider">
				</div>
			</form>
		</div>
		<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
		?>
	</div>
</div>