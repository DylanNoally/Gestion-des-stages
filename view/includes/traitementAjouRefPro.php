<?php
	// Vérification de la connexion à la base de données
	// Si nous sommes bien connecté
	if ($bdd == true) {
		// Préparation de la requête SQL suivante : inserer le nom et la fonction du référent professionel
		$query = $bdd->prepare("INSERT INTO referent_pro (Nom_referent_pro , Fonction_referent_pro) values (:nomRef , :fonctionRef)");
		$query->bindParam(':nomRef' , $nomRef);
		$query->bindParam(':fonctionRef' , $fonctionRef);

		// Vérification de l'existence des valeurs du formulaire
		if (isset($_POST["nom"]) && isset($_POST["fonction"])) {
			if(empty($_POST["nom"])) {
					?>
					<script type="text/javascript"> alert("Veuillez inscrire le nom du référent"); </script> 
					<?php
				}

				elseif ($_POST["nom"] != 'string') {
					?>
					<script type="text/javascript"> alert("Un nom ne possède pas de chiffres ou de caractères spéciaux !"); </script> 
					<?php
				}
		
				else {
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