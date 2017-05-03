  <?php
    session_start();
    include 'view/includes/header.php';
    include 'view/includes/connexionBD.php';
    require 'view/includes/traitementRechercheStage.php';

    $query = $bdd->prepare('SELECT Id_classe, Nom_classe FROM classe');
    $query->execute();
    $results=$query->fetchAll();

    $query2 = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant, Id_etudiant FROM etudiant');
    $query2->execute();
    $results2=$query2->fetchAll();
    
  ?>

	<h2><?php if(key_exists('idClasse',$_SESSION) && key_exists('idEleve',$_SESSION)) 
          /* Si le resultat du formulaire concernant la valeur de la classe choisie
          est correct, alors on recherche à partir de celle-ci le nom de la classe associé et on l'affiche */
                    { 
                        foreach ($results2 as $recherche2) 
                        {
                            if($_SESSION['idEleve'] == $recherche2['Id_etudiant'])
                            {
                                $_SESSION['NomEleve'] = $recherche2['Prenom_etudiant']." ".$recherche2['Nom_etudiant']." - ";
                                echo $_SESSION['NomEleve'];
                            }
                        }
                        foreach ($results as $recherche)
                        {
                            if($_SESSION['idClasse'] == $recherche['Id_classe'])
                            {
                                $_SESSION['NomClasse'] = $recherche['Nom_classe'];
                                echo $_SESSION['NomClasse'];
                            }
                        }
                    } 
                    else 
                    { 
                        echo "Erreur de traitement des informations"; 
                    } 
                    ?>

  </h2>
	<br>
    	<div id="Bande">
        <div class="left1">
    	     <h3>Historique des stages</h3>
        </div>
        <div class="right1">
            <form action="stage.php" method="GET">
    	      <input type="submit" value="Ajouter un stage">
            </form>
    	 </div>
      </div>
      <br>
          <?php

          // --------------------------------------------
          // --------------------------------------------
          // Préparation de toutes les données à utiliser 
          // --------------------------------------------
          // --------------------------------------------
          $histo = [];
          foreach ($results as $historique) {          
                    
            $query = $bdd->prepare('SELECT Annee, Nom_entreprise, Nom_referent_peda, Nom_referent_pro, Nom_etudiant
                        FROM stage, annee, entreprise, referent_peda, referent_pro, etudiant
                        WHERE stage.Id_date_annee=annee.Id_date_annee
                        AND stage.Id_entreprise=entreprise.Id_entreprise
                        AND stage.Id_referent_pro=referent_pro.Id_referent_pro
                        AND stage.Id_referent_peda=referent_peda.Id_referent_peda
                        AND stage.Id_etudiant=etudiant.Id_etudiant
                        AND etudiant.Id_etudiant= '.$_SESSION['idEleve'].'');

                    
          $query->execute();
          $results = $query->fetchAll();
            // La fonction array_push à ajouté les valeurs des deux variables $results à l'array $histo
            // Donc tous les résultats des requêtes SQL ($results) dans l'array $histo
            array_push($histo, $results);
          }
          // ------------------------------------------------------
          // ------------------------------------------------------
          // Fin de la préparation de toutes les données à utiliser 
          // ------------------------------------------------------
          // ------------------------------------------------------                      
          ?>


		<table border class="table11">
   			<thead> <!-- En-tête du tableau -->
       			<tr>
           			<th>Année</th>
           			<th>Entreprise</th>
           			<th>Référent pédagogique</th>
           			<th>Référent professionnel</th>
           			<th>Action</th>
       			</tr>
   			</thead>

   			<tbody> <!-- Corps du tableau -->
            <?php
            foreach ($histo as $etudiant) {
              // Si l'array $etudiant n'est pas vide
              // Si il y a des valeurs dans l'array etudiant
              if (!empty($etudiant)) {
                // Afficher l'etudiant qui se trouve dans la première clé de l'array $etudiant qui est lui_même l'array $histo auquel il y a les valeurs de la variable $results
                // Puis incrémentation gràce à la boucle foreach
              foreach ($etudiant as $info) {
            ?>        
   				<tr>
            <td> <?php echo $info['Annee']; ?> </td>
            <td> <?php echo $info['Nom_entreprise']; ?> </td>
            <td> <?php echo $info['Nom_referent_peda']; ?> </td>
            <td> <?php echo $info['Nom_referent_pro']; ?> </td>
            <!-- voir détails gradi -->              
   					<!-- <td><a href="detailStage.php?id_etudiant=<?php echo $etudiant['Id_etudiant']; ?>">Voir détails</a> </td> -->
   				</tr>

   			</tbody>
            <?php
                }
              }
            }
            ?>
		</table>		
