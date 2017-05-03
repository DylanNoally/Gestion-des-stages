<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
	//include 'view/includes/retourEnForce.php';

	
	include 'view/includes/avant_header.php';
?>
	<title>Choix de l'année</title>
</head>

<?php 
	require 'view/includes/traitementRechercheStage.php';

	
/**$query = $bdd->prepare('SELECT Id_classe, Nom_classe FROM classe');
    $query->execute();
    $results=$query->fetchAll();
    $query2 = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant, Id_etudiant FROM etudiant');
    $query2->execute();
    $results2=$query2->fetchAll(); **/
?>
<script type="text/javascript">
  $(document).ready(function() {
  	$('#entrepriseExistante').select2({});
});
</script>
<?php
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
?>

<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>

		<div class="add_stage">
			<h2><?php if(key_exists('idClasse',$_SESSION) && key_exists('idEleve',$_SESSION)) 
					  		/* Si le resultat du formulaire concernant la valeur de la classe choisie
					  		est correct, alors on recherche à partir de celle-ci le nom de la classe associé et on l'affiche */
							{
								echo $_SESSION['NomEleve'];
					            echo $_SESSION['NomClasse'];
					        }
					        else 
					        { 
					            echo "Erreur de traitement des informations"; 
					        } 
		        ?>
	       	</h2>
			<div class="add_stage_titre">
				<h2>Nouveau Stage</h2>
			</div>

			<form action="ensembleStages.php" method="POST" >
				<div class="add_stage_entreprise_existante">
					<label>Entreprise existante :</label>
			        <select class="entreprise_existante" name="entrepriseExistante" id="entrepriseExistante">
				        <?php 
		           			$query = $bdd->prepare('SELECT Id_entreprise, Nom_entreprise FROM entreprise');
		           			$query->execute();
		           			$resultatNomEntreprise = $query->fetchAll();
				        	foreach ($resultatNomEntreprise as $nomEntreprise) 
		           			{
							?>

								<option value="<?php echo $nomEntreprise['Id_entreprise']; ?>">
									<?php echo $nomEntreprise['Nom_entreprise']; ?>
								</option>
						<?php
							}
						?>
			        </select>
			    </div>

			    <div class="add_stage_resp_peda_exixtant">
			        <label>Responsable pédagogique :</label>
			        <select class="resp_peda_exixtant" name="respPedagogiqueExistant" id="respPedagogiqueExistant">
			           <?php 
		       			$query = $bdd->prepare('SELECT Id_referent_peda, Nom_referent_peda FROM referent_peda');
		       			$query->execute();
		       			$resultatNomRefPeda = $query->fetchAll();
			        	foreach ($resultatNomRefPeda as $nomRefPeda) 
		       			{
						?>

							<option value="<?php echo $nomRefPeda['Id_referent_peda']; ?>">
								<?php echo $nomRefPeda['Nom_referent_peda']; ?>
							</option>
					<?php
						}
					?>
			        </select>
		        </div>

		        <div class="add_stage_resp_tech_exixtant">
			        <label>Responsable technique :</label>
			        <select class="resp_techa_exixtant" name="respTechniqueExistant" id="respTechniqueExistant">
			           <?php 
		       			$query = $bdd->prepare('SELECT Id_referent_pro, Nom_referent_pro FROM referent_pro');
		       			$query->execute();
		       			$resultatNomRefPro = $query->fetchAll();
			        	foreach ($resultatNomRefPro as $nomRefPro) 
		       			{
						?>

							<option value="<?php echo $nomRefPro['Id_referent_pro']; ?>">
								<?php echo $nomRefPro['Nom_referent_pro']; ?>
							</option>
					<?php
						}
					?>
			        </select>
		        </div>

		        <div class="add_stage_techno">
			        <label>Technologies pratiquées :</label>
			        <select class="techno" size="6" name="TechnosPratiques" multiple="multiple">
					    <?php 
		       			$query = $bdd->prepare('SELECT Id_techno, Nom_techno FROM techno');
		       			$query->execute();
		       			$resultatTechnos = $query->fetchAll();
			        	foreach ($resultatTechnos as $technos) 
		       			{
						?>

							<option value="<?php echo $technos['Id_techno']; ?>">
								<?php echo $technos['Nom_techno']; ?>
							</option>
					<?php
						}
					?>
					</select>
				</div>

				<div class="add_stage_annee_exixtant">
					<label>Année concernée :</label>
		       		<select class="annee_exixtant" name="annee" id="annee">
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
		        </div>

		        <div class="add_stage_date_debut">
					<label>Date début :</label>
			           <input class="date_debut" type="date" name="dateDebut"/>
		        </div>
		        
		        <div class="add_stage_date_fin">  
			        <label>Date Fin :</label>
			           <input class="date_fin" type="date" name="dateFin"/>
		        </div>

		        <div class="creer_stage"><input type="submit" name="creerStage" value="Créer un Stage"></div>
		    </form>
		</div>
		<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
		?>
	</div>
</div>
