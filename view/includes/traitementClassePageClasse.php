<?php if (isset($_GET['la_classe'])) {
					
		if (empty($_GET['la_classe'])) {
			// On execute rien	
		}
		else { 
			$classe = $_GET['la_classe'];
		}
	}
	$extraireClasse = $bdd->prepare('SELECT Nom_classe FROM classe WHERE Nom_classe = ?');
		// Exécution de la requête 
	$extraireClasse->execute(array($classe));
	$lesClasses = $extraireClasse->fetch();
?>