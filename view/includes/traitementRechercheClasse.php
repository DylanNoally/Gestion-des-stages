<?php
	if (isset($_GET['la_classe'])) { // Le "name" du premier formulaire de la page Recherche classe/etudiant (2. Suivi scolarité)
			
		if (empty($_GET['la_classe'])) {
			// On execute rien	
		}
		else { 
			$nomClasse = $_GET['la_classe'];
			$nomClasses = $bdd->prepare('SELECT Nom_classe FROM classe WHERE classe.Nom_classe = ?');
			$nomClasses->execute(array($nomClasse));
			$classe = $nomClasses->fetch();
		}
	} 
?>