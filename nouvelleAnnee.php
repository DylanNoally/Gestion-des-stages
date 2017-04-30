<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2> // CLASSE(BD)  LISTE ELEVE DE LA CLASSE// </h2>
					<br>
					<br>
					
					<h2>Historique des élèves par année</h2>
					<br>

					<form action="nouvelleAnnee.php" method="POST" >
						<label>Année :</label>
				           <select name="annee" id="annee">
				           	<?php 
		           			$query = $bdd->prepare('SELECT Id_date_annee, Annee FROM annee ORDER BY Annee ');
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

					ou nouvelle :<input type="text" maxlength="9" name="nouvelleAnnee" format="NNNNN">
					<br>

					<input type="submit" name="historiqueEleveValider" value="Valider">
					</form>

					<?php
						// Vérification de la connexion à la base de données
						// Si nous sommes bien connecté
						if ($bdd == true) 
						{
							// Préparation de la requête SQL suivante : inserer la classe
							$query = $bdd->prepare("INSERT INTO annee (Annee) values (:ajoutAnnee)");
							$query->bindParam(':ajoutAnnee' , $ajoutAnnee);
							// Vérification de l'existence des valeurs du formulaire
							if (isset($_POST["historiqueEleveValider"]) && !empty($_POST["nouvelleAnnee"])) 
							{
								// Récuperation des valeurs du formulaire
								$ajoutAnnee = $_POST["nouvelleAnnee"];

								// On extrait toutes les années présentes dans la table Année, puis on compare cette dernière
								// avec la valeur transmise dans le formulaire pour vérifier si cela ne créera pas un doublon.
								$query2 = $bdd->prepare('SELECT Annee FROM annee');
					           	$query2->execute();
					           	$results = $query2->fetchAll();

					           	var_dump($results);

					           	// On recherche dans le resultat de la requête sous forme de tableau si il y a un doublon entre ce 
					           	// que l'utilisateur à saisie et ce qu'il y a dans la Base de Données
					           	foreach ($results as $uneAnnee) 
					           	{
					           		if($results == $ajoutAnnee)
					           		{
										// header('Location: nouvelleAnnee.php');
					           			echo "L\n 'année que vous souhaitez ajouter est déjà enregistrée !";
					           		}
					           		else
					           		{
					           			// Exécution de la requête 
										$query->execute();

										// Arrêt forcé du Foreach pour éviter qu'il ne se rééxectue une fois de plus
										break;

					           		}									
					           	}
							}
							//else
							//{

							//	echo 'RIEN';
							//}		
						}
						elseif ($bdd == false) 
						{
							echo "Echec de connexion à la base de données";
						}
					?>