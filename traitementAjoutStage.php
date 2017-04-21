<?php
	setlocale(LC_TIME, 'fra_fra');

	if(isset($_POST["creerStage"]))
	{

			$dateDeb = DateTime::createFromFormat('d/m/Y', $_POST['dateDebut']);
			$dateFin = DateTime::createFromFormat('d/m/Y', $_POST['dateFin']);

			$requetInsertProgram = $bdd->prepare('INSERT INTO stage(Id_stage, Date_debut_stage, Date_fin_stage, Type_stage, Observations_stage, Id_etudiant, Id_referent_peda, Id_entreprise, Id_referent_pro, Id_date_annee) VALUES (4, :dateDebut, :dateFin, "Développement Application", "Etudiant sérieux et une assiduité omniprésente"), 4, 1, 1, 1, 1'); 
	 
			$requetInsertProgram->execute();

	}