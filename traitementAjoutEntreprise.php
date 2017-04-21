<?php
	if(isset($_POST["creerEntreprise"]))
	{
		$name = 'NouveauNom';
		$Site = "jfsgi";
		$chiffre = 10000;
		$adr = "Rue";
		$type= 1;
		$req = $bdd->prepare('INSERT INTO entreprise(Site_entreprise, Nom_entreprise, Chiffre_affaire_entreprise, Adresse_entreprise, Id_type) VALUES (:Site_entreprise, :Nom_entreprise, :Chiffre_affaire_entreprise, :Adresse_entreprise, :Id_type)');

		$req->execute(array(
		'Site_entreprise' => $Site,
		'Nom_entreprise' => $_POST["nouvelleEntreprise"],
		'Chiffre_affaire_entreprise' => $_POST["chiffreAffaires"],
		'Adresse_entreprise' => $_POST["adressePostale"],
		'Id_type' => $type,
		));


	}
?>