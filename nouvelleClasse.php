	<?php
		session_start();
		include 'view/includes/header.php';
		include 'view/includes/connexionBD.php';
		include 'view/includes/traitementNouvelleClasse.php';
	?>

		<h1>Suivi Scolarité</h1>
		<br>
		<h3>Ajouter une nouvelle classe</h3>
		<br>
		<form method="post" action="stage.php">
		Libellé : <input type="text" class="text1" name="LibelléClasse">
		<br><br>
		<div class='bouton213'>
		<input type="submit" name="BoutonAjoutClasse" value="Valider">
		</form>
		<input type="reset" name="BoutonReset" value="Réinitialiser" onclick="nouvelleClasse.php">
		</div>
