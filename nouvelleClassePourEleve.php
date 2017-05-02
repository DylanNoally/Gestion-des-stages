<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';

?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2><?php if(key_exists('idClasse',$_SESSION) && key_exists('idEleve',$_SESSION)) 
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
					
					<h2>Associer l'élève a une nouvelle classe</h2>

					<br>
					<br>

					<form action="nouvelleClassePourEleve.php" method="POST" >
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
				        <br>

				        <label>Année :</label>
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
				    <input type="submit" name="classePourEleve" value="Valider">

				    </form>


				    <?php
						// Vérification de la connexion à la base de données
						// Si nous sommes bien connecté
						if ($bdd == true) 
						{
							
							
							// Préparation de la requête SQL suivante : associer l'élève dans une classe
							$query = $bdd->prepare("INSERT INTO se_trouver (Id_etudiant, Id_date_annee, Id_classe) values (:idEleve, :idAnnee, :idClasse)");
							$query->bindParam(':idEleve' , $id);
							$query->bindParam(':idAnnee' , $idAnnee);
							$query->bindParam(':idClasse' , $idClasse);
							

							// Vérification du bouton valider
							if (isset($_POST["classePourEleve"])) 
							{
								// Récuperation des valeurs du formulaire
								$idClasse = $_POST["classe"];
								$idAnnee = $_POST["annee"];
								$id = $_SESSION['idEleve'];

								$query->execute();

							}
							else
							{
								echo 'RIEN';
							}		
						}
						elseif ($bdd == false) 
						{
							echo "Echec de connexion à la base de données";
						}
					?>