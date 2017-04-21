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

					<form action="index.php" method="POST" >
						<label>Classe :</label>
			        		<select name="classe" id="classe">
		        		<?php 
		           			$query = $bdd->prepare('SELECT Nom_classe, Id_classe FROM classe');
		           			$query->execute();
		           			$results = $query->fetchAll();


		           			foreach ($results as $classe) 
		           			{
						?>

        					<option value="<?php echo $classe['Id_classe']; ?>">
    							<?php echo $classe['Nom_classe']; ?>
        					</option>
    					<?php
							}
						?>
			        </select>

				        <br>
				        <br>

				        <label>Année :</label>
				           <select name="annee" id="annee">
				           	<?php 
		           			$query = $bdd->prepare('SELECT Id_date_annee, Annee FROM annee');
		           			$query->execute();
		           			$resultatAnnee = $query->fetchAll();

				        	foreach ($resultatAnnee as $Annee) 
		           			{
							?>

        					<option value="<?php echo $Annee['Id_date_annee']; ?>">
    							<?php echo $Annee['Annee']; ?>
        					</option>
    						<?php
							}
							?>
				           </select>
				    <br>
				    <input type="submit" name="historiqueEleveValider" value="Valider">

				    </form>