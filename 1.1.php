  <?php
    session_start();
    include 'view/includes/header.php';
  ?>

	<h2>Jean-Marc Dupont - BTS1</h2>
	<br>
    	<div id="Bande">
        <div class="left1">
    	     <h3>Historique des stages</h3>
        </div>
        <div class="right1">
    	     <input type="button" value="Ajouter un stage" onclick="html:location.href='add_stage.php'">
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
   					<td>2016/2017</td>
   					<td>Mentalworks</td>
   					<td>M.Ammar</td>
   					<td>M.Salesse</td>
   					<td><a href="detail_stage.php">Voir détails</td>
   				</tr>
   				<tr>
   					<td>2015/2016</td>
   					<td>Nodevo</td>
   					<td>M.Ammar</td>
   					<td>M.Ammar</td>
   					<td><a href="detail_stage.php">Voir détails</td>
   				</tr>
   			</tbody>
		</table>		
