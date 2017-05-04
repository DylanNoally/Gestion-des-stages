<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Liste des BAC et ajout d'un BAC</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';

	include 'view/includes/traitementTypesBAC.php';
?>

<div class="container">
	<div id="content">
		<!-- Responsive -->
		<div style="float: left;">
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>
		</div>
		<h1 class="typeBAC_titre">Suivi scolarité</h1>
		<div id="typeBAC_corps">
			<div class="typeBAC_ajouter">
				<h3 class="typeBAC_ajouter_titre">Ajouter un nouveau BAC</h3>
				<form class="typeBAC_formulaire" method="post" action="typesDeBAC.php">
					<div class="typeBAC_input">					
						Intitulé : <input type="text" class="text24" name="Intitulé">
					</div>
					<div class="typeBAC_ajouter">
						<input type="submit" class="Ajouter3" name="Ajouter">
					</div>
				</form>
			</div>

			<div class="typeBAC_liste">
				<h3 class="typeBAC_liste_titre">Liste des BAC</h3>
					<?php 
					          
					$query = $bdd->prepare('SELECT Libelle_type_bac, Id_type_bac FROM typebac');
					          
					$query->execute();
					$results = $query->fetchAll();
					?>				
				<table class="typeBAC_tableau">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th class="text-left">Intitulé</th>
			           		<th class="text-left">Actions</th>
			       		</tr>
			   		</thead>
					<?php         
					foreach ($results as $eleve) 
					          
					{
					?>			   		
			   		<tbody class="typeBAC_tableau_corps">
			   			<tr>
			   				<td class="text-left">
			   					<!-- On affiche simplement l'intitulé -->
                                <?php echo $eleve['Libelle_type_bac']; ?>
							</td>

			   				<td class="text-left">
			   					<form class="typeBAC_bouton" align="center" name="Supp" method="post">
				   					<input type="button" value="Supprimer" class="Suppr" name="suppresion">
				   					<?php
	                                    //On crée un champs caché pour mettre la valeur Id_type_bac dans chaque bouton supprimer de chaque ligne.
	                                    echo "<input type='hidden' name='id' value='".$eleve['Id_type_bac']."'>";
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
	               //On récupére Id_type_bac pour suppresion en BDD
	               $id = $_POST['id'];
	               //Exécution de la requete de suppression
				   $query = $bdd->prepare("DELETE FROM typebac where Id_type_bac = '$id'");
				   $query->execute();
	               ?>
	               <script type="text/java-script">
	                               //Mettre l'url complète vers typesDeBAC.php
	                               //Si ça créer une boucle (réactualisation infini de la page), il faut supprimer la ligne window.location.href.
	                               //mais il faudra rafraichir la page manuellement pour que les lignes supprimées disparaissent.
	                               //Permet de rafraichir la page après suppression
								window.location.href('localhost/exerciceDylan/typesDeBAC.php');
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
