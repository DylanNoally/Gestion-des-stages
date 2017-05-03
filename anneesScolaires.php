	<?php
		session_start();
		include 'view/includes/header.php';
    	include 'view/includes/connexionBD.php';
    	include 'view/includes/traitementAnneesScolaires.php';    	
	?>

	<h1>Suivi scolarité</h1>
	<br>
		<div id="contenu234">
			<div class="left1">
				<h3>Liste des années scolaires</h3>
				<br>
					<?php 
					          
					$query = $bdd->prepare('SELECT Annee, Id_date_annee FROM annee');
					          
					$query->execute();
					$results = $query->fetchAll();
					?>
		
				<table border class="table23">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th>Année</th>
			           		<th>Actions</th>
			       		</tr>
			   		</thead>
					<?php         
					foreach ($results as $eleve) 
					          
					{
					?>
                    <tbody>
                        <tr>
                            <td>
                                <!-- On affiche simplement l'année -->
                                <?php echo $eleve['Annee']; ?>
                            </td>
                            <td>
                                <form name="Supp" method="POST">
                                <input type="submit" name="suppresion" value="Supprimer">
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

			<div class="right1">
				<h3>Ajouter une année</h3>
				<br>
				<form method="post" action="anneesScolaires.php">				
				Nom : <input type="text" class="text23" name="Nom">
				<br> <br>
				<input type="submit" class="Ajouter2" name="Ajouter">
				</form>
			</div>
		</div>						