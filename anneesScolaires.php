<?php
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Liste des années scolaires et ajout d'une année</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';

	include 'view/includes/traitementAnneesScolaires.php';   	
	?>

<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
		<h1 class="anneesScolaire_titre">Suivi scolarité</h1>
		<div id="anneesScolaire_corps">
			<div class="anneesScolaire_ajouter">
				<h3 class="anneesScolaire_ajouter_titre">Ajouter d'une année</h3>
				<form class="anneesScolaire_formulaire" method="post" action="anneesScolaires.php">
					<div class="anneesScolaire_input">					
						Nom : <input type="text" class="text23" name="Nom">
					</div>
					<div class="anneesScolaire_ajouter">
						<input type="submit" name="Ajouter2" value="Ajouter">
					</div>
				</form>
			</div>

			<div class="anneesScolaire_liste">
				<h3 class="anneesScolaire_liste_titre">Liste des années scolaires</h3>
					<?php 
					          
					$query = $bdd->prepare('SELECT Annee, Id_date_annee FROM annee');
				          
					$query->execute();
					$results = $query->fetchAll();
					?>				
				<table class="anneesScolaire_tableau">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th class="text-left">Année</th>
			           		<th class="text-left">Actions</th>
			       		</tr>
			   		</thead>
					<?php         
					foreach ($results as $eleve) 
					          
					{
					?>			   		
			   		<tbody class="anneesScolaire_tableau_corps">
			   			<tr>
			   				<td class="text-left">
			   					<!-- On affiche simplement l'année -->
                                <?php echo $eleve['Annee']; ?>

							</td>
			   				<td class="text-left">
			   					<form class="anneesScolaire_bouton" align="center" name="Supp" method="post">
			   					<input type="button" value="Supprimer" class="Suppr" name="suppresion">
			   					<?php
                                    //On crée un champs caché pour mettre la valeur Id_date_annee dans chaque bouton supprimer de chaque ligne.
                                    echo "<input type='hidden' name='id' value='".$eleve['Id_date_annee']."'>";
                                ?>
			   					</form>	
			   				</td>
			   			</tr>		
			   		</tbody>
					<?php
					}
					?>	
				</table>
			</div>
			<?php
                if(isset($_POST['suppresion']))
                {
	               //On récupére Id_date_annee pour suppresion en BDD
	               $id = $_POST['id'];
	               //Exécution de la requete de suppression
				   $query = $bdd->prepare("DELETE FROM annee where Id_date_annee = '$id'");
				   $query->execute();
	               ?>
	               <script type="text/java-script">
	                               //Mettre l'url complète vers anneesScolaires.php
	                               //Si ça créer une boucle (réactualisation infini de la page), il faut supprimer la ligne window.location.href.
	                               //mais il faudra rafraichir la page manuellement pour que les lignes supprimées disparaissent.
	                               //Permet de rafraichir la page après suppression
								window.location.href('localhost/exerciceDylan/anneesScolaires.php');
	               </script>
	               <?php
				}
				?>
		</div>
		<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
		?>
	</div>
</div>
