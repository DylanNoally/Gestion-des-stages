<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
	require 'traitementRechercheStage.php';

	$query = $bdd->prepare('SELECT Id_classe, Nom_classe FROM classe');
    $query->execute();
    $results=$query->fetchAll();

    $query2 = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant, Id_etudiant FROM etudiant');
    $query2->execute();
    $results2=$query2->fetchAll();
?>
<script type="text/javascript">
  $(document).ready(function() {
  	$('#entrepriseExistante').select2({});
});
</script>

<div class="container">
		<div id="content">
			<div class="left">
				<h2><?php if(key_exists('idClasse',$_SESSION) && key_exists('idEleve',$_SESSION)) 
          		/* Si le resultat du formulaire concernant la valeur de la classe choisie
          		est correct, alors on recherche à partir de celle-ci le nom de la classe associé et on l'affiche */
          					{
								echo $_SESSION['nomEleve'];
	                            echo $_SESSION['nomClasse'];
	                        }
		                    else 
		                    { 
		                        echo "Erreur de traitement des informations"; 
		                    } 
		                    ?>
	                       </h2>
						<br>
						
						<h2>Nouveau Stage</h2>

						<br>
						<br>
						<form action="ensembleStages.php" method="POST" >
							<label>Entreprise existante :</label>
					        <select name="entrepriseExistante" id="entrepriseExistante">
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
					        <br>
					        <br>

					        <label>Responsable pédagogique :</label>
					        <select name="respPedagogiqueExistant" id="respPedagogiqueExistant">
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

					        <br>
					  		<br>

					        <label>Responsable technique :</label>
					        <select name="respTechniqueExistant" id="respTechniqueExistant">
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

					        <br>
					        <br>

					        <label>Technologies pratiquées :</label>
					        <select size="6" name="TechnosPratiques" multiple="multiple">
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

							<br>
							<br>

							<label>Année concernée :</label>
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
							<br>

							<label>Date début :</label>
					           <input type="date" name="dateDebut"/>
					           
					        <label>Date Fin :</label>
					           <input type="date" name="dateFin"/>

					        <br>
					        <br>
					        <div align="center"><input type="submit" name="creerStage" value="Créer un Stage"></div>

							<br>
					        <br>
					        <br>
					        <br>
					        <br>
					        <br>
					        <br>
					        <?php
					      		include 'view/includes/footer.php';
					      	?>
					    </form>

					    