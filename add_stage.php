<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2> // NOM ELEVE RECHERCHé (BD) // </h2>
					<br>
					
					<h2>Nouveau Stage</h2>

					<br>
					<br>
					<form action="ensembleStages.php" method="GET" >
						<label>Entreprise existante :</label>
				        <select name="entrepriseExistante" id="entrepriseExistante">
				           <option value="nodevo">Nodevo</option>
				           <option value="mentalworks">MentalWorks</option>
				        </select>

				        <br>
				        <br>

				        <label>Responsable pédagogique :</label>
				        <select name="respPedagogiqueExistant" id="respPedagogiqueExistant">
				           <option value="ammar">M. Ammar</option>
				           <option value="kintzler">Kintzler</option>
				        </select>

				        <br>
				  		<br>

				        <label>Responsable technique :</label>
				        <select name="respTechniqueExistant" id="respTechniqueExistant">
				           <option value="autre">Autres</option>
				        </select>

				        <br>
				        <br>

				        <label>Technologies pratiquées :</label>
				        <select size="9" name="TechnosPratiques" multiple="multiple">
						    <option>HTML 5</option>
						    <option>CSS 3</option>
						    <option>PHP</option>
						    <option>JavaScript</option>
						    <option>C#</option>
						    <option>Symphony</option>
						    <option>Drupal</option>
						    <option>Python</option>
						    <option>Oracle</option>
						 </select>

						<br>
						<br>

						<script type="text/javascript" src="year.js"></script>
						<label>Année concernée :</label>
				           <select id="year"></select>

						<br>
						<br>

						<label>Date début :</label>
				           <input type="date" name="dateDebut"/>
				        <label>Date Fin :</label>
				           <input type="date" name="dateFin"/>

				        <br>
				        <br>
				        <div align="center"><input type="submit" name="creerStage" value="Créer un Stage"></div>

				        <?php
				      		include 'view/includes/footer.php';
				      	?>
				    </form>