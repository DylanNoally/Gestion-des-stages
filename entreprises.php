<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2>Entreprises</h2>
					<br>
					
					<h2>Rechercher une entreprise</h2>

					<br>
					<br>
					<form action="index.php" method="GET" >
						<label>Nom de l'entreprise :</label>
				        <select name="entrepriseExistante" id="entrepriseExistante">
				           <option value="nodevo">Nodevo</option>
				           <option value="mentalworks">MentalWorks</option>
				        </select>

				        <input type="submit" name="rechercheEntreprise" value="Rechercher">
				    </form>
			</div>

			<div class="right">
				<h2>Nouvelle entreprise</h2>
					<br>
					<br>
					<form action="index.php" method="GET" >
						Nom de l'entreprise :<input type="text" name="nouvelleEntreprise">
						<br><br>
						Chiffre d'affaires :<input type="text" name="nouvelleEntreprise">
						<br><br>
						Adresse postale :<input type="text" name="nouvelleEntreprise">
						<br><br>
						<div align="center"><input type="submit" name="creerEntreprise" value="Valider"></div>