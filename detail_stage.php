<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// Traitement du paramettre de la page "classe" passé dans l'URL
$idEtudiant = 0;
//$_GET['id_etudiant'];

// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
//include 'view/includes/retourEnForce.php';

// On inclue le menu et la connexion à la page
include 'view/includes/header.php';
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<!-- Bouton "Nouvelle visite" qui nous redirigera vers la page "Ajout d'une visite"-->
		<p><a href="#"><img src="public/img/bouton_nv_visite.png" alt="Image bouton nouvelle visite" title="Nouvelle visite"></a></p>
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

				// Préparation de la requête SQL suivante : afficher les observations des visites et du stage de l'étudiant
				// Les observations des visites et du stage de l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL
				$observationEtudiant = $bdd->prepare('SELECT visite.Observations_visite, stage.Observations_stage FROM  visite, stage WHERE visite.Id_stage = stage.Id_stage AND stage.Id_etudiant = ?');
				$observationEtudiant->execute(array($idEtudiant));

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
					echo '<h1><div style="margin-left: 27%; width: 445px;">'.$etudiant['Nom_etudiant']. ' ' .$etudiant['Prenom_etudiant'].'</div></h1>';
				}

				// Affichage de la classe de l'étudiant
				$classe = $classeEtudiant->fetch();
				echo '<h1><div style="margin-left: 42%;">'.$classe['Nom_classe'].'</div></h1><br />';	
			?>

			<div class="coprsBilan">
				<div class="caracBilan">
				<?php
					// Affichage des caractéristiques liées au bilan
					$caracBilan = $caracObsBilan->fetch();
					echo '<b>Entreprise :</b>'.' '.'<div style="color: #DA6060; float: right; margin-right: 150px;">'.$caracBilan['Nom_entreprise'].'</div>';
					echo '<br /><b>Référent pro :</b>'.' '.'<div style="color: #DA6060; float: right; margin-right: 89px;">'.$caracBilan['Nom_referent_pro'].'</div>';
					echo '<br /><b>Référenet péda :</b>'.' '.'<div style="color: #DA6060; float: right; margin-right: 138px;">'.$caracBilan['Nom_referent_peda'].'</div>';
					echo '<br /><b>Année concernée :</b>'.' '.'<div style="color: #DA6060; float: right; margin-right: 132px;">'.$caracBilan['Annee'].'</div>';
				?>
				</div>

				<div class="obsBilan">
					<?php
						// Affichage du bilan de stage
						$obsBilan = $observationEtudiant->fetch();
						echo '<br /><br /><p>Bilan du stage :</p><br />';
						echo $obsBilan['Observations_stage'];
					?>
				</div>
			</div>

			<h2>Visites liées au stage</h2>

			<?php	
				while ($obsVisite = $observationEtudiant->fetch()) {
					?>
						<div class="obsVisite">
						<?php
						// Affichage des observations maintenant stockées dans la variable $obsVisite
						echo '<br /><br /><div style="margin-left: 40%; font-weight: bold;">Observation :</div><br />';
						echo $obsVisite['Observations_visite'];
						?>
						</div>
					<?php	
				}	
			?>
		</div>
	</div>			
</div> 


<?php 
// On inclue le footer à la page
include 'view/includes/footer.php';
?>