<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div class="left">
				<h2>Entreprises</h2>
					<br>
					
					<h3>Rechercher une entreprise :</h3>
					<br>
					<form action="informationsEntreprise.php" method="GET" >
						<label>Nom de l'entreprise :</label>
				        <select name="entrepriseExistante" id="entrepriseExistante">
				           <?php 
		           			$query = $bdd->prepare('SELECT Id_entreprise, Nom_entreprise FROM entreprise');
		           			$query->execute();

		           			$resultatNomEntreprise = $query->fetchAll();
							
				        	foreach ($resultatNomEntreprise as $nomEntreprise) 
		           			{
							?>

        					<option value="<?php echo $nomEntreprise['Id_entreprise']; ?>">
    							<?php echo $nomEntreprise['Nom_entreprise']; ?>
        					</option>
    						<?php
							}

							?>
				        </select>
				        <br>
				        <input type="submit" name="rechercheEntreprise" value="Rechercher">
				    </form>
			</div>

			<div class="right">
				<h2>Nouvelle entreprise</h2>
					<br>
					<br>
					<form action="informationsEntreprise.php" method="POST" >
						Nom de l'entreprise :<input type="text" name="nouvelleEntreprise">
						<br><br>
						Chiffre d'affaires :<input type="text" name="chiffreAffaires">
						<br><br>
						Adresse postale :<input type="text" name="adressePostale">
						<br><br>
						<div align="center"><input type="submit" name="creerEntreprise" value="Valider"></div>
					</form>