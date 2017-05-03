<?php
	// Vérification de la connexion à la base de données
	// Si nous sommes bien connecté
	if ($bdd == true) {
		// Préparation de la requête SQL suivante : inserer l'année
		$query = $bdd->prepare("INSERT INTO annee (Annee) values (:annee)");
		$query->bindParam(':annee' , $annee);

		// Vérification de l'existence des valeurs du formulaire
		if (isset($_POST["Ajouter"])) {
				// Récuperation des valeurs du formulaire
				$annee = $_POST["Nom"];

				// Exécution de la requête 
				$query->execute();
			}		
	}
	elseif ($bdd == false) {
		echo "Echec de connexion à la base de données";
	}
?>