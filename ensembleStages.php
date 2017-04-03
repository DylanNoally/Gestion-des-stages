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
    	     <input type="button" value="Ajouter un stage" onclick="html:location.href='nouvelleClasse.php'">
    	 </div>
      </div>
      <br> 
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
   				<tr>
   					<td><?php $query = $bdd->prepare('SELECT Annee FROM annee WHERE Id_date_annee =2');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Annee'];
                                 } 
            ?></td>
   					<td><?php $query = $bdd->prepare('SELECT Nom_entreprise FROM entreprise WHERE Id_entreprise =2');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Nom_entreprise'];
                                 } 
            ?></td>
   					<td><?php $query = $bdd->prepare('SELECT Nom_referent_peda FROM referent_peda WHERE Id_referent_peda =1');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Nom_referent_peda'];
                                 } 
            ?></td>
   					<td><?php $query = $bdd->prepare('SELECT Nom_referent_pro FROM referent_pro WHERE Id_referent_pro =1');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Nom_referent_pro'];
                                 } 
            ?></td>
   					<td>Voir détails</td>
   				</tr>
   				<tr>
   					<td><?php $query = $bdd->prepare('SELECT Annee FROM annee WHERE Id_date_annee =1');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Annee'];
                                 } 
            ?></td>
   					<td><?php $query = $bdd->prepare('SELECT Nom_entreprise FROM entreprise WHERE Id_entreprise =1');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Nom_entreprise'];
                                 } 
            ?></td>
   					<td><?php $query = $bdd->prepare('SELECT Nom_referent_peda FROM referent_peda WHERE Id_referent_peda =1');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Nom_referent_peda'];
                                 } 
            ?></td>
   					<td><?php $query = $bdd->prepare('SELECT Nom_referent_pro FROM referent_pro WHERE Id_referent_pro =2');
                                 $query->execute();
                                 while ($results = $query->fetch())
                                 {
                                 echo $results['Nom_referent_pro'];
                                 } 
            ?></td>
   					<td>Voir détails</td>
   				</tr>
   			</tbody>

		</table>		
