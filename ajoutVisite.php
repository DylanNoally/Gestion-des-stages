<?php
	session_start();
	include 'view/includes/header.php';
?>
	<h2>Jean-Marc Dupont - BTS1</h2>
	<br>
	<h3>Ajouter une nouvelle visite</h3>
	<br>
	Date visite: <input type="Date" name="DateVisite">
	<br><br>
	Observations: <br> <textarea name="Observations" rows="4" cols="40">Observations</textarea>
	<br>
	<input type="submit" name="Valider">
	<input type="reset" name="Annuler">