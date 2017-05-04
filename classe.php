<!-- Inclusion des éléments de la page -->

<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Historique des élèves par année</title>
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
				include 'view/includes/traitementClassePageClasse.php';
				
				// Affichage de la classe maintenant stockées dans la variable $classe
				echo '<h1> Classe '.$lesClasses['Nom_classe'].'</h1>';
			?>

			<h3>Historique des élèves par année</h3>
			<div id="bouton_nouv_annee">
			<!-- Bouton "Ajouter une année" qui nous redirigera vers la page "Classe : nouvelle année"-->
				<p><a href="nouvelleAnnee.php?Nom_classe=<?php echo $lesClasses['Nom_classe']; ?>"><img src="public/img/bouton_nv_classe.png" alt="Image bouton nouvelle année" title="Ajouter une année"></a></p>
			
			</div>
			<div id="table_class">
				<?php
					// --------------------------------------------
					// --------------------------------------------
					// Préparation de toutes les données à utiliser 
					// --------------------------------------------
					// --------------------------------------------
					 $lesClasses = $bdd->prepare( 'SELECT Annee, Nom_classe FROM annee, se_trouver, classe WHERE annee.Id_date_annee = se_trouver.Id_date_annee and classe.Id_classe = se_trouver.Id_classe and classe.Nom_classe= ? GROUP BY Annee');
					$lesClasses ->execute(array($classe));


					while($laClasse = $lesClasses->fetch()) {
					$coordonneesEtudiant= $bdd->prepare( 'SELECT Nom_etudiant, Prenom_etudiant, Telephone_etudiant, Annee_obtention_bac_etudiant, Annee FROM etudiant, classe, se_trouver, annee WHERE etudiant.Id_etudiant = se_trouver.Id_etudiant and classe.Id_classe = se_trouver.Id_classe and annee.Id_date_annee = se_trouver.Id_date_annee and classe.Nom_classe= ? And Annee like "'.$laClasse['Annee'].'" ORDER BY Nom_etudiant'); 
					$coordonneesEtudiant ->execute(array($classe));
				;
					// ------------------------------------------------------
					// ------------------------------------------------------
					// Fin de la préparation de toutes les données à utiliser 
					// ------------------------------------------------------
					// ------------------------------------------------------

				?>
				
				<table>
					<thead>
						<tr>
							<p><?php echo'<div style="display: inline-block; font-weight: bold; width: 100%; text-align: center; margin-top: 30px; font-size: 21px;">'.$laClasse['Annee'].'</div'; ?></p>
							<th>Nom</th>
							<th>Prénom</th>
							<th>N° téléphone</th>
							<th>Année obtention BAC</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>

						<?php
							while($laCoor = $coordonneesEtudiant->fetch()) {
						?>
						<tr>
								<td>
									<?php
									// Afficher le nom de l'étudiant qui se trouve dans la clé 'Nom_etudiant' 
									// Cette clé est dans l'array $laCoor qui contient les données extraites de $coordonneesEtudiant
									// Puis incrémentation gràce à la boucle while
									echo $laCoor['Nom_etudiant'];
									?>
								</td>
								<td>
									<?php
									// Afficher le prénom de l'étudiant
									// ----
									// ----
									echo $laCoor['Prenom_etudiant'];
									?>
								</td>

								<td>
									<?php
									// Afficher le numéro de téléphone de l'étudiant
									// ----
									// ----
									echo $laCoor['Telephone_etudiant'];
									?>
								</td>
								<td>
									<?php
									// Afficher l'année d'obtention de bac de l'étudiant
									// ----
									// ----
									echo $laCoor['Annee_obtention_bac_etudiant'];
									?>
								</td>

								<!-- Lorsque l'on clique sur "Voir détail" cela nous renvoi vers la page "###" -->
								<!-- Auquel se trouve l'étudiant et auquel il y a l'identifiant de l'étudiant ("Id_etudiant") passé en paramètre dans l'URL -->
								<!-- Puis incrémentation gràce à la boucle while -->
								<td><a href="#">Voir détail</a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<?php
				}
				?>
			</div>
		</div>
		<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
		?>
	</div>
</div>		