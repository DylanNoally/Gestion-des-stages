	<?php
		session_start();
		include 'view/includes/header.php';
	?>

	<h1>Suivi scolarité</h1>
	<br>
		<div id="contenu234">
			<div class="left1">
				<h3>Liste des années scolaires</h3>
				<br>
				<table border class="table23">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th>Année</th>
			           		<th>Actions</th>
			       		</tr>
			   		</thead>
			   		<tbody>
			   			<tr>
			   				<td>2017/2018</td>
			   				<td>Supprimer</td>
			   			</tr>
			   			<tr>
			   				<td>2016/2017</td>
			   				<td>Supprimer</td>
			   			</tr>
			   			<tr>
			   				<td>2015/2016</td>
			   				<td>Supprimer</td>
			   			</tr>		
			   		</tbody>
				</table>
			</div>

			<div class="right1">
				<h3>Ajouter une année</h3>
				<br>
				Nom : <input type="textarea" class="textarea23" name="Nom">
				<br> <br>
				<input type="submit" class="Ajouter2" name="Ajouter">
			</div>
		</div>		
