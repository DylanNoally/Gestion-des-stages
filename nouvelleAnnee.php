<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2> // CLASSE(BD)  LISTE ELEVE DE LA CLASSE// </h2>
					<br>
					
					<h2>Historique des élèves par année</h2>

					<br>
					<br>

					<script type="text/javascript" src="year.js"></script>
					<form action="classe.php" method="GET" >
						<label>Année :</label>
				           <select id="year"></select>

					ou nouvelle :<input type="text" name="nouvelleAnnee">
					<br>

					<input type="submit" name="historiqueEleveValider" value="Validers">
					</form>
