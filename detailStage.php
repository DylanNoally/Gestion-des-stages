<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Détail du stage</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';

	// Traitement du paramettre de la page "classe" passé dans l'URL
	$idEtudiant = 7;
	/**
	if (isset($_GET['id_etudiant'])) {
		$_GET['id_etudiant'] = (int) $_GET['id_etudiant'];
		
		if (empty($_GET['id_etudiant'])) {
			// On execute rien	
		}
		else { 
			$idEtudiant = $_GET['id_etudiant'];
		}
	}
	**/
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
		<div id="bouton_nouv_visite">
			<!-- Bouton "Nouvelle visite" qui nous redirigera vers la page "Ajout d'une visite"-->
			<p><a href="#"><img src="public/img/bouton_nv_visite.png" alt="Image bouton nouvelle visite" title="Nouvelle visite"></a></p>
		</div>
		<div id="interne">
			<?php
				// --------------------------------------------
				// --------------------------------------------
				// Préparation de toutes les données à utiliser 
				// --------------------------------------------
				// --------------------------------------------
				// Préparation de la requête SQL suivante : afficher le nom et le prénom de l'étudiant
				// Le nom et le prénom de l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL   
				$nomEtudiant = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant FROM etudiant WHERE  etudiant.Id_etudiant = ?');
				$nomEtudiant->execute(array($idEtudiant));	
				// La fonction execute attribut au "?" la valeur dans la clé de l'array $idEtudiant en echapant(protegeant) la valeur

				// Préparation de la requête SQL suivante : afficher les observations des visites de l'étudiant
				// Les observations des visites de l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL
				$observationVisiteEtudiant = $bdd->prepare('SELECT visite.Observations_visite FROM visite, stage WHERE visite.Id_stage = stage.Id_stage AND stage.Id_etudiant = ?');
				$observationVisiteEtudiant->execute(array($idEtudiant));

				// Préparation de la requête SQL suivante : afficher l'observation bilan du stage de l'étudiant
				// L'observation bilan du stage de l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL
				$observationBilanEtudiant = $bdd->prepare('SELECT stage.Observations_stage FROM stage WHERE stage.Id_etudiant = ?');
				$observationBilanEtudiant->execute(array($idEtudiant));

				// Préparation de la requête SQL suivante : afficher les classes et leur identifiant
				// Les classes et leur identifiant pour l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL
				$classeEtudiant = $bdd->prepare('SELECT Nom_classe FROM classe, se_trouver, etudiant WHERE se_trouver.Id_classe = classe.Id_classe AND se_trouver.Id_etudiant = etudiant.Id_etudiant AND etudiant.Id_etudiant = ?');
				$classeEtudiant->execute(array($idEtudiant));

				// Préparation de la requête SQL suivante : afficher les caractéristique de l'observation bilan
				// Les caractéristique de l'observation bilan pour l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL
				$caracObsBilan = $bdd->prepare('SELECT Nom_entreprise, Nom_referent_pro, Nom_referent_peda, Annee FROM entreprise, referent_pro, referent_peda, annee, stage, etudiant WHERE entreprise.Id_entreprise = referent_pro.Id_entreprise AND stage.Id_date_annee = annee.Id_date_annee AND stage.Id_referent_peda = referent_peda.Id_referent_peda AND stage.Id_entreprise = entreprise.Id_entreprise AND stage.Id_etudiant = etudiant.Id_etudiant AND etudiant.Id_etudiant = ?');
				$caracObsBilan->execute(array($idEtudiant));
				// ------------------------------------------------------
				// ------------------------------------------------------
				// Fin de la préparation de toutes les données à utiliser 
				// ------------------------------------------------------
				// ------------------------------------------------------

				// Tant qu'il y a une valeur retourner dans la fonction fetch pour la variable $nomEtudiant (qui est attribuée à la variable $etudiant) ;
				// Donc tant qu'il y a une requête SQL dans $etudiant
				while ($etudiant = $nomEtudiant->fetch()) {
					// Affichage du nom et du prénom maintenant stockées dans la variable $etudiant
					echo '<h1><div style="text-align: center; margin-top: 50px;">'.$etudiant['Nom_etudiant']. ' ' .$etudiant['Prenom_etudiant'].'</div></h1>';
				}

				// Affichage de la classe de l'étudiant
				$classe = $classeEtudiant->fetch();
				echo '<h1><div style="text-align: center;">'.$classe['Nom_classe'].'</div></h1><br />';	
			?>

			<div class="coprsBilan">
				<div class="caracBilan">
				<?php
					// Affichage des caractéristiques liées au bilan
					$caracBilan = $caracObsBilan->fetch();
					echo '<div style="display: inline-block; font-weight: bold; width: 130px; margin-bottom: 7px;">Entreprise</div>'.' '.'<div style="color: #DA6060; display: inline-block; width: 55%; text-align: center;">'.$caracBilan['Nom_entreprise'].'</div>';
					echo '<br /><div style="display: inline-block; font-weight: bold; width: 130px; margin-bottom: 7px;">Référent pro</div>'.' '.'<div style="color: #DA6060; display: inline-block; width: 55%; text-align: center;">'.$caracBilan['Nom_referent_pro'].'</div>';
					echo '<br /><div style="display: inline-block; font-weight: bold; width: 130px; margin-bottom: 7px;">Référenet péda</div>'.' '.'<div style="color: #DA6060; display: inline-block; width: 55%; text-align: center;">'.$caracBilan['Nom_referent_peda'].'</div>';
					echo '<br /><div style="display: inline-block; font-weight: bold; width: 130px;">Année concernée</div>'.' '.'<div style="color: #DA6060; display: inline-block; width: 55%; text-align: center;">'.$caracBilan['Annee'].'</div>';
				?>
				</div>

				<div class="obsBilan">
					<?php
						// Affichage du bilan de stage
						$obsBilan = $observationBilanEtudiant->fetch();
						echo '<br /><br /><p>Bilan du stage :</p><br />';
						echo '<span style="text-shadow: 0.9px 0.7px grey; color: grey;">'.$obsBilan['Observations_stage'].'</pan>';
					?>
				</div>
			</div>

			<h2>Visites liées au stage</h2>

			<?php	
				$obsVisite = $observationVisiteEtudiant->fetchAll();

				foreach ($obsVisite as $observation) {
			?>
					<div class="obsVisite">
						<!-- Affichage des observations maintenant stockées dans la variable $obsVisite -->
						<br /><br /><p>Observation :</p><br />
						<?php
						echo $observation['Observations_visite'];
						?>
					</div>
				<?php
				}
				?>		
		</div>

		<?php 
		// On inclue le footer à la page
		include 'view/includes/footer.php';
		?>
	</div>			
</div> 


