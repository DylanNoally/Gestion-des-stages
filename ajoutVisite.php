<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Détail du stage</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
	include 'view/includes/connexionBD';

	$idEtudiant = 2;

	/*if (isset($_GET['id_etudiant'])) {
		$_GET['id_etudiant'] = (int) $_GET['id_etudiant'];
		
		if (empty($_GET['id_etudiant'])) {
			// On execute rien	
		}
		else { 
			$idEtudiant = $_GET['id_etudiant'];
		}
	}*/

	// Le nom et le prénom de l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL   
	$nomEtudiant = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant FROM etudiant WHERE  etudiant.Id_etudiant = ?');
	$nomEtudiant->execute(array($idEtudiant));	
	// La fonction execute attribut au "?" la valeur dans la clé de l'array $idEtudiant en echapant(protegeant) la valeur

	// Préparation de la requête SQL suivante : afficher les classes et leur identifiant
	// Les classes et leur identifiant pour l'étudiant dont l'identifiant du stage est celui qui vient du paramettre passé dans l'URL
	$classeEtudiant = $bdd->prepare('SELECT Nom_classe FROM classe, se_trouver, etudiant WHERE se_trouver.Id_classe = classe.Id_classe AND se_trouver.Id_etudiant = etudiant.Id_etudiant AND etudiant.Id_etudiant = ?');
	$classeEtudiant->execute(array($idEtudiant));

	while ($etudiant = $nomEtudiant->fetch()) {
	// Affichage du nom et du prénom maintenant stockées dans la variable $etudiant
	echo '<h1><div style="text-align: center; margin-top: 50px;">'.$etudiant['Nom_etudiant']. ' ' .$etudiant['Prenom_etudiant'].'</div></h1>';
	}


				
// Affichage de la classe de l'étudiant
				$classe = $classeEtudiant->fetch();
				echo '<h1><div style="text-align: center;">'.$classe['Nom_classe'].'</div></h1><br />';
?>
	<br>
	<h3>Ajouter une nouvelle visite</h3>
	<br>
	Date visite: <input type="Date" name="DateVisite">
	<br><br>
	Observations: <br> <textarea name="Observations" rows="4" cols="40"> Observations </textarea>
	<br>
	<a href="detail_stage.php"> <input type="submit" name="ajoutVisite" value='Valider'> </a>
	<input type="reset" name="Annuler">
