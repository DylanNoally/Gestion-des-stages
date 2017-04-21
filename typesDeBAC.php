	<?php
		session_start();
		include 'view/includes/header.php';
		include 'view/includes/connexionBD.php';
		include 'view/includes/traitementTypesBAC.php';
	?>

	<h1>Suivi scolarité</h1>
	<br>
		<div id="contenu234">
			<div class="left1">
				<h3>Liste des BAC</h3>
				<br>
					<?php 
					          
					$query = $bdd->prepare('SELECT Libelle_type_bac, Id_type_bac FROM typebac');
					          
					$query->execute();
					$results = $query->fetchAll();
					?>				
				<table border class="table24">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th>Intitulé</th>
			           		<th>Actions</th>
			       		</tr>
			   		</thead>
					<?php         
					foreach ($results as $eleve) 
					          
					{
					?>			   		
			   		<tbody>
			   			<tr>
			   				<td><option value="<?php echo $eleve['Id_type_bac']; ?>">
								<?php echo $eleve['Libelle_type_bac']; ?>
								</option>
							</td>
			   				<td>Supprimer</td>
			   			</tr>		
			   		</tbody>
					<?php
					}
					?>				   		
				</table>
			</div>

			<div class="right1">
				<h3>Ajouter un nouveau BAC</h3>
				<br>
				<form method="post" action="typesDeBAC.php">					
				Intitulé : <input type="text" class="text24" name="Intitulé">
				<br> <br>
				<input type="submit" class="Ajouter3" name="Ajouter">
				</form>
			</div>
		</div>		

