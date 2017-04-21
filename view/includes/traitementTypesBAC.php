<?php
	// Vérification de la connexion à la base de données
	// Si nous sommes bien connecté
	if ($bdd == true) {
		// Préparation de la requête SQL suivante : inserer la classe
		$query = $bdd->prepare("INSERT INTO typebac (Libelle_type_bac) values (:bac)");
		$query->bindParam(':bac' , $bac);

		// Vérification de l'existence des valeurs du formulaire
		if (isset($_POST["Ajouter"])) {
				// Récuperation des valeurs du formulaire
				$bac = $_POST["Intitulé"];

				// Exécution de la requête 
				$query->execute();
			}		
	}
	elseif ($bdd == false) {
		echo "Echec de connexion à la base de données";
	}
?>