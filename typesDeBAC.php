<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		include 'view/includes/avant_header.php';
?>
	<title>Liste des BAC et ajout d'un BAC</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';

	include 'view/includes/traitementTypesBAC.php';
?>

<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
		<h1 class="typeBAC_titre">Suivi scolarité</h1>
		<div id="typeBAC_corps">
			<div class="typeBAC_ajouter">
				<h3 class="typeBAC_ajouter_titre">Ajouter un nouveau BAC</h3>
				<form class="typeBAC_formulaire" method="post" action="typesDeBAC.php">
					<div class="typeBAC_input">					
						Intitulé : <input type="text" class="text24" name="Intitulé">
					</div>
					<div class="typeBAC_ajouter">
						<input type="submit" name="Ajouter" value="Ajouter">
					</div>
				</form>
			</div>

			<div class="typeBAC_liste">
				<h3 class="typeBAC_liste_titre">Liste des BAC</h3>
					<?php 
					          
					$query = $bdd->prepare('SELECT Libelle_type_bac, Id_type_bac FROM typebac');
					          
					$query->execute();
					$results = $query->fetchAll();
					?>				
				<table class="typeBAC_tableau">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th class="text-left">Intitulé</th>
			           		<th class="text-left">Actions</th>
			       		</tr>
			   		</thead>
					<?php         
					foreach ($results as $eleve) 
					          
					{
					?>			   		
			   		<tbody class="typeBAC_tableau_corps">
			   			<tr>
			   				<td class="text-left">
			   					<option value="<?php echo $eleve['Id_type_bac']; ?>">
								<?php echo $eleve['Libelle_type_bac']; ?>
								</option>
							</td>
			   				<td class="text-left">Supprimer</td>
			   			</tr>		
			   		</tbody>
					<?php
					}
					?>				   		
				</table>
			</div>
		</div>
		<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
		?>
	</div>
</div>		
