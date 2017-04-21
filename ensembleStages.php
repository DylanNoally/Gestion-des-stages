  <?php
    session_start();
    include 'view/includes/header.php';
    include 'view/includes/connexionBD.php';
  ?>

	<h2>Jean-Marc Dupont - BTS1</h2>
	<br>
    	<div id="Bande">
        <div class="left1">
    	     <h3>Historique des stages</h3>
        </div>
        <div class="right1">
            <form action="stage.php" method="GET">
    	      <input type="button" value="Ajouter un stage">
            </form>
    	 </div>
      </div>
      <br>
          <?php
                    
            $query = $bdd->prepare('SELECT Annee, Nom_entreprise, Nom_referent_peda, Nom_referent_pro
                        FROM stage, annee, entreprise, referent_peda, referent_pro
                        WHERE stage.Id_date_annee=annee.Id_date_annee
                        AND stage.Id_entreprise=entreprise.Id_entreprise
                        AND stage.Id_referent_pro=referent_pro.Id_referent_pro
                        AND stage.Id_referent_peda=referent_peda.Id_referent_peda');

                    
          $query->execute();
          $results = $query->fetchAll();
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
          <?php         
          foreach ($results as $eleve) 
                    
          {
          ?>
   			<tbody> <!-- Corps du tableau -->
   				<tr>
            <td><option value="<?php echo $eleve['Id_etudiant']; ?>">
                <?php echo $eleve['Annee']; ?>
                </option>                
            </td>
            <td><option value="<?php echo $eleve['Id_etudiant']; ?>">
                <?php echo $eleve['Nom_entreprise']; ?>
                </option>
            </td>
            <td><option value="<?php echo $eleve['Id_etudiant']; ?>">
                <?php echo $eleve['Nom_referent_peda']; ?>
                </option>
            </td>
            <td><option value="<?php echo $eleve['Id_etudiant']; ?>">
                <?php echo $eleve['Nom_referent_pro']; ?>
                </option>
            </td>
            <!-- voir détails gradi -->              
   					<td><a href="detail_stage.php?id_etudiant=<?php echo $etudiant['Id_etudiant']; ?>">Voir détails</a> </td>
   				</tr>

   			</tbody>
        <?php
        }
        ?>  
		</table>		
