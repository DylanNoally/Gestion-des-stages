	<?php
		session_start();
		include 'view/includes/header.php';
		include 'view/includes/connexionBD.php';
		include 'view/includes/traitementTypesBAC.php';
	?>

	<h1>Suivi scolarité</h1>
	<br>
		<div id="contenu234">
			<div class="left1">
				<h3>Liste des BAC</h3>
				<br>
					<?php 
					          
					$query = $bdd->prepare('SELECT Libelle_type_bac, Id_type_bac FROM typebac');
					          
					$query->execute();
					$results = $query->fetchAll();
					?>				
				<table border class="table24">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th>Intitulé</th>
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
                                <!-- On affiche simplement l'intitulé -->
                                <?php echo $eleve['Libelle_type_bac']; ?>
                            </td>
                            <td>
                                <form name="Supp" method="POST">
                                <input type="submit" name="suppresion" value="Supprimer">
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

			<div class="right1">
				<h3>Ajouter un nouveau BAC</h3>
				<br>
				<form method="post" action="typesDeBAC.php">					
				Intitulé : <input type="text" class="text24" name="Intitulé">
				<br> <br>
				<input type="submit" class="Ajouter3" name="Ajouter">
				</form>
			</div>
		</div>		

