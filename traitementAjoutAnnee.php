<?php

	if(isset($_GET["historiqueEleveValider"] && (!empty($_GET["nouvelleAnnee"]))))
	{			
		$ajoutAnnee = $_GET["nouvelleAnnee"];

		$req = $bdd->prepare('INSERT INTO annee(Annee) VALUES (:ajoutAnnee)');
        $req->execute(array(
        'ajoutAnnee' => htmlspecialchars($_GET["nouvelleAnnee"])
        ));
	}
?>