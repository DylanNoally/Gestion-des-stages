	<?php
		session_start();
		include 'view/includes/header.php';
    	include 'view/includes/connexionBD.php';
    	include 'view/includes/traitementAnneesScolaires.php';
    	include 'view/includes/traitementAnneesScolairesSuppr.php';    	
	?>

	<h1>Suivi scolarité</h1>
	<br>
		<div id="contenu234">
			<div class="left1">
				<h3>Liste des années scolaires</h3>
				<br>
					<?php 
					          
					$query = $bdd->prepare('SELECT Annee, Id_date_annee FROM annee');
					          
					$query->execute();
					$results = $query->fetchAll();
					?>
		
				<table border class="table23">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th>Année</th>
			           		<th>Actions</th>
			       		</tr>
			   		</thead>
					<?php         
					foreach ($results as $eleve) 
					          
					{
					?>
			   		<tbody>
			   			<tr>
			   				<td><option value="<?php echo $eleve['Id_date_annee']; ?>">
								<?php echo $eleve['Annee']; ?>
								</option>
							</td>
			   				<td>
			   					<form method="post" action="anneesScolaires.php">
			   					<input type="button" value="Supprimer" class="Suppr" name="Supprimer">
			   					</form>	
			   				</td>
			   			</tr>		
			   		</tbody>
					<?php
					}
					?>	
				</table>
			</div>

			<div class="right1">
				<h3>Ajouter une année</h3>
				<br>
				<form method="post" action="anneesScolaires.php">				
				Nom : <input type="text" class="text23" name="Nom">
				<br> <br>
				<input type="submit" class="Ajouter2" name="Ajouter">
				</form>
			</div>
		</div>	
	
