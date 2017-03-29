<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
	include 'view/includes/connexionBD.php';
	$query = $bdd->prepare('SELECT * FROM etudiant');
	$query->execute();
	$results=$query->fetchAll();
	var_dump($results);

?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2>Rechercher un élève</h2>
				<br>
				<form action="1.1.php" method="GET" >
					<label>Classe :</label>
			        <select name="classe" id="classe">
			        <?php   $compteur = $bdd->prepare('SELECT COUNT(Id_classe) as nombre FROM classe');
			        	    $compteur->execute();
			        	    $i = 1;
			        	while ($results < $compteur) 
			        	{ 
			        	?>
			        	<option value="bts[i]">
			        		<?php 
			           			$query = $bdd->prepare('SELECT Nom_classe FROM classe WHERE Id_classe=i');
			           			$query->execute();

			           			while ($results = $query->fetch())
								{
									echo $results['Nom_classe'];
								}
								$i++;
							?>
			           	</option>
			           	<?php
			        	}
			        	?>
			            
			            <option value="bts2">
			            	<?php 
			           			$query = $bdd->prepare('SELECT Nom_classe FROM classe WHERE Id_classe=2');
			           			$query->execute();

			           			while ($results = $query->fetch())
								{
								   echo $results['Nom_classe'];
								}
							?>
						</option>
			        </select>

			        <br>

					<label>Elève :</label>
			        <select name="classe" id="classe">
			            <option value="eleve1"><?php 
			           							$query = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant FROM etudiant WHERE Id_etudiant=1');
			           							$query->execute();

			           							while ($results = $query->fetch())
												{
												    echo $results['Nom_etudiant'].' '.$results['Prenom_etudiant'];
												}
												?>
						</option>
			           <option value="eleve2"><?php 
			           							$query = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant FROM etudiant WHERE Id_etudiant=2');
			           							$query->execute();

			           							while ($results = $query->fetch())
												{
												    echo $results['Nom_etudiant'].' '.$results['Prenom_etudiant'];
												}
												?>
						</option>
			        </select>

				<input type="submit" name="rechercheEleve" value="Rechercher">
				</form>