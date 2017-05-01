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
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<!-- Responsive -->
			<div style="float: left;">
				<?php include 'view/includes/responsiveMenuGauche.php'; ?>
			</div>

			<div class="nouvAnnee">
				<h1 class="laClasse"> // CLASSE(BD)  LISTE ELEVE DE LA CLASSE// </h1>
				<h2 align="center" style="margin-bottom: 40px;">Historique des élèves par année</h2>
					<form action="nouvelleAnnee.php" method="GET">
						<div class="nouvAnnee_corps">
							<div class="nouvAnnee_annee">
								<label>Année :</label>
								<div class="nouvAnnee_annee_contenu">
						           <select name="annee" id="annee">
							           	<?php 
						           			$query = $bdd->prepare('SELECT Id_date_annee, Annee FROM annee ORDER BY Annee');
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
						    </div>

						    <div class="nouvAnnee_nouvelle">
								<label>Ou nouvelle : </label> 
								<div class="nouvAnnee_nouvelle_contenu">
									<input type="text" name="nouvelleAnnee" format="NNNNN"/>
								</div>
							</div>
						</div>
						<div class="nouvAnnee_valider">
							<input type="submit" name="historiqueEleveValider" value="Valider">
						</div>
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
			</div>
			<?php 
				// On inclue le footer à la page
				include 'view/includes/footer.php';
			?>
		</div>
</div>
