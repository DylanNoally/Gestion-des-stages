<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2>Rechercher un élève</h2>
				<br>
				<form action="ensembleStages.php" method="GET" >
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

					<label>Elève :</label> 
			        <select name="eleve" id="eleve">
			            
			            <?php 
			           		$query = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant, Id_etudiant FROM etudiant');
			           		$query->execute();
							$results = $query->fetchAll();
			           		foreach ($results as $eleve) 
			           		{
			           	?>

			           		<option value="<?php echo $eleve['Id_etudiant']; ?>">
								<?php echo $eleve['Prenom_etudiant']." ".$eleve['Nom_etudiant']; ?>
							</option>
						<?php
							}
						?>
					</select>
				<input type="submit" name="rechercheEleve" value="Rechercher">
				</form>