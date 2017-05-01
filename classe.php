<!-- Inclusion des éléments de la page -->

<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Classe</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';

	// On inclue le traitement de la recherche d'une classe à la page
	include 'view/includes/traitementRechercheClasse.php'
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
			
		<div id="interne_classe">
			<?php
				// Affichage de la classe maintenant stockées dans la variable $classe
				echo '<h1> Classe '.$classe['Nom_classe'].'</h1>';
			?>

			<h3>Historique des éléves par année</h3>
			<div id="bouton_nouv_annee">
			<!-- Bouton "Ajouter une année" qui nous redirigera vers la page "Classe : nouvelle année"-->
			
				<p><a href="nouvelleAnnee.php"><img src="public/img/bouton_nv_classe.png" alt="Image bouton nouvelle année" title="Ajouter une année"></a></p>
			
			</div>
			<div id="table_class">
				<?php
					// --------------------------------------------
					// --------------------------------------------
					// Préparation de toutes les données à utiliser 
					// --------------------------------------------
					// --------------------------------------------
					$eleves = [];
					// Préparation de la requête SQL suivante : afficher toutes les années
					$query = $bdd->prepare('SELECT Id_date_annee FROM annee');

					// Exécution de la requête 
					$query->execute();
					$results = $query->fetchAll();


					foreach ($results as $coordonnees) {
						// Préparation de la requête SQL suivante : afficher toutes les coordonnées des étudiants qui se trouvent dans la clé 0 de l'array $coordonnees
						// L'array $coordonnees qui est la variable $results qui elle-même est le résultat de la requête SQL suivante : afficher toutes les années
						// afficher toutes les coordonnées des étudiants qui se trouvent dans la première année (puis incrémentation gràce à la boucle foreach)
						$query = $bdd->prepare('SELECT * FROM classe, etudiant, annee, se_trouver WHERE se_trouver.Id_classe = classe.Id_classe AND se_trouver.Id_etudiant = etudiant.Id_etudiant AND se_trouver.Id_date_annee = annee.Id_date_annee AND annee.Id_date_annee = '.$coordonnees[0]);
						$query->execute();
						$results = $query->fetchAll();

						// La fonction array_push à ajouté les valeurs des deux variables $results à l'array $eleve
						// Donc tous les résultats des requêtes SQL ($results) dans l'array $eleve
						array_push($eleves, $results);
					}
					// ------------------------------------------------------
					// ------------------------------------------------------
					// Fin de la préparation de toutes les données à utiliser 
					// ------------------------------------------------------
					// ------------------------------------------------------

				?>
				
				<table>
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prénom</th>
							<th>N° téléphone</th>
							<th>Année obtention BAC</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>

						<?php
						foreach ($eleves as $annee) {
							// Si l'array $anneee n'est pas vide
							// Si il y a des valeurs dans l'array annee
							if (!empty($annee)) {
								// Afficher l'année qui se trouve dans la première clé de l'array $annee qui est lui_même l'array $eleves auquel il y a les valeurs de la variable $results
								// Puis incrémentation gràce à la boucle foreach
								echo '<b>'.$annee[0]['Annee'].'</b>';
							foreach ($annee as $etudiant) {
						?>
						<tr>
								<td>
									<?php
									// Afficher le nom de l'étudiant qui se trouve dans la première clé de l'array $etudiant 
									// Qui est lui_même l'array $annee qui est lui_même l'array $eleves auquel il y a les valeurs de la variable $results
									// Puis incrémentation gràce à la boucle foreach
									echo $etudiant['Nom_etudiant'];
									?>
								</td>
								<td>
									<?php
									// Afficher le prénom de l'étudiant
									// ----
									// ----
									echo $etudiant['Prenom_etudiant'];
									?>
								</td>

								<td>
									<?php
									// Afficher le numéro de téléphone de l'étudiant
									// ----
									// ----
									echo $etudiant['Telephone_etudiant'];
									?>
								</td>
								<td>
									<?php
									// Afficher l'année d'obtention de bac de l'étudiant
									// ----
									// ----
									echo $etudiant['Annee_obtention_bac_etudiant'];
									?>
								</td>

								<!-- Lorsque l'on clique sur "Voir détail" cela nous renvoi vers la page "detail_stage.php" -->
								<!-- Auquel se trouve l'étudiant et auquel il y a l'identifiant de l'étudiant ("Id_etudiant" qui fait partie des coordonnées des étudiants) passé en paramètre dans l'URL -->
								<!-- Puis incrémentation gràce à la boucle foreach -->
								<td><a href="#">Voir détail</a></td>
						<?php
								}
							}
						}

						?>
						
								
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
		?>
	</div>
</div>		