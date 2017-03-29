<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2> // NOM ELEVE(BD) // </h2>
					<br>
					
					<h2>Associer l'élève a une nouvelle classe</h2>

					<br>
					<br>

					<form action="index.php" method="GET" >
						<label>Classe :</label>
			        		<select name="classe" id="classe">
			           			<option value="bts1">BTS 1</option>
			           			<option value="bts2">BTS 2</option>
			        		</select>

				        <br>
				        <br>

				        <label>Année :</label>
				           <select id="year"></select>
				    <br>
				    <input type="submit" name="historiqueEleveValider" value="Valider">

				    </form>