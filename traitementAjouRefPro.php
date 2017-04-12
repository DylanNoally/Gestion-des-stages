<?php
	// Vérification de la connexion à la base de données
	// Si nous sommes bien connecté
	if ($bdd == true) {
		// Préparation de la requête SQL suivante : inserer le nom et la fonction du référent professionel
		$query = $bdd->prepare("INSERT INTO referent_pro (Nom_referent_pro , Fonction_referent_pro) values (:nomRef , :fonctionRef)");
		$query->bindParam(':nomRef' , $nomRef);
		$query->bindParam(':fonctionRef' , $fonctionRef);

		// Vérification de l'existence des valeurs du formulaire
		if (isset($_POST["nom"])) {
			if (isset($_POST["fonction"])) {
				// Récuperation des valeurs du formulaire
				$nomRef = $_POST["nom"];
				$fonctionRef = $_POST["fonction"];

				// Exécution de la requête 
				$query->execute();
			}
			
		}		
	}
	elseif ($bdd == false) {
		echo "Echec de connexion à la base de données";
	}
?>