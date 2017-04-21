<?php
	// Vérification de la connexion à la base de données
	// Si nous sommes bien connecté
	if ($bdd == true) {

		// Préparation de la requête SQL suivante : inserer la classe
		$query = $bdd->prepare('DELETE FROM annee WHERE Annee');

		// Vérification de l'existence des valeurs du formulaire
		if (isset($_POST["Supprimer"])) {
		// Exécution de la requête 
		$query->execute();
		}		 		
	}

	elseif ($bdd == false) {
		echo "Echec de connexion à la base de données";
	}
?>