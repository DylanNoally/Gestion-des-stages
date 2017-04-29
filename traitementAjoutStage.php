<?php

		setlocale(LC_TIME, 'fra_fra');

		// Vérification de la connexion à la base de données
		// Si nous sommes bien connecté
		if ($bdd == true) 
		{
			// Préparation de la requête SQL suivante : inserer le stage
			$query = $bdd->prepare("INSERT INTO stage (Date_debut_stage, Date_fin_stage, Type_stage, Observations_stage, Id_etudiant, Id_referent_peda, Id_entreprise, Id_referent_pro, Id_date_annee) values (:dateDebut, :dateFin, 'Développement Application', 'Etudiant sérieux et une assiduité omniprésente', :idEleve, 1, 1, 1, :idDateAnnee)");

			$query->bindParam(':dateDebut' , $dateDebut);
			$query->bindParam(':dateFin' , $dateFin);
			$query->bindParam(':idEleve' , $_SESSION['idEleve']);
			$query->bindParam(':idDateAnnee' , $_POST['annee']);

			// Vérification de l'existence des valeurs du formulaire
			if (isset($_POST["creerStage"])) 
			{
				// Récuperation des valeurs du formulaire
				$dateDeb = DateTime::createFromFormat('d/m/Y', $_POST['dateDebut']);
				$dateFin = DateTime::createFromFormat('d/m/Y', $_POST['dateFin']);

				// On extrait toutes les années présentes dans la table Année, puis on compare cette dernière
				// avec la valeur transmise dans le formulaire pour vérifier si cela ne créera pas un doublon.
				// $query2 = $bdd->prepare('SELECT Annee FROM annee');
				// $query2->execute();
				// $results = $query2->fetchAll();


				// On recherche dans le resultat de la requête sous forme de tableau si il y a un doublon entre ce 
				// que l'utilisateur à saisie et ce qu'il y a dans la Base de Données
				//foreach ($results as $uneAnnee) 
					//{
					    //if($results == $ajoutAnnee)
					    //{
							// header('Location: nouvelleAnnee.php');
					        // echo "L\n 'année que vous souhaitez ajouter est déjà enregistrée !";
					    //}
					    //else
					    //{
					        //Exécution de la requête 
							$query->execute();

							// Arrêt forcé du Foreach pour éviter qu'il ne se rééxectue une fois de plus
							// break;

					    //}									
					//}
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