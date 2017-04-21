<?php
	// Vérification de la connexion à la base de données
	// Si nous sommes bien connecté
	if ($bdd == true) {
		// Préparation de la requête SQL suivante : inserer la classe
		$query = $bdd->prepare("INSERT INTO classe (Nom_classe) values (:nomClasse)");
		$query->bindParam(':nomClasse' , $nomClasse);

		// Vérification de l'existence des valeurs du formulaire
		if (isset($_POST["BoutonAjoutClasse"])) {
				// Récuperation des valeurs du formulaire
				$nomClasse = $_POST["LibelléClasse"];

				// Exécution de la requête 
				$query->execute();
			}		
	}
	elseif ($bdd == false) {
		echo "Echec de connexion à la base de données";
	}
?>