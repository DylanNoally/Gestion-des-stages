	<?php
		session_start();
		include 'view/includes/header.php';
	?>

		<h1>Suivi Scolarité</h1>
		<br>
		<h3>Ajouter une nouvelle classe</h3>
		<br>
		Libellé : <input type="textarea" class="textarea1" name="LibelléClasse">
		<br><br>
		Désignation : <input type="textarea" class="textarea2" name="Désignation">
		<br> <br>
		<div class='bouton213'>
		<input type="submit" name="Valider">
		<input type="reset" name="Annuler">
		</div>
