	<?php
		session_start();
		include 'view/includes/header.php';
	?>

	<h1>Suivi scolarité</h1>
	<br>
		<div id="contenu234">
			<div class="left1">
				<h3>Liste des BAC</h3>
				<br>
				<table border class="table24">
			   		<thead> <!-- En-tête du tableau -->
			       		<tr>
			           		<th>Intitulé</th>
			           		<th>Actions</th>
			       		</tr>
			   		</thead>
			   		<tbody>
			   			<tr>
			   				<td>BAC Général S</td>
			   				<td>Supprimer</td>
			   			</tr>
			   			<tr>
			   				<td>BAC Général ES</td>
			   				<td>Supprimer</td>
			   			</tr>
			   			<tr>
			   				<td>BAC PRO STII</td>
			   				<td>Supprimer</td>
			   			</tr>		
			   		</tbody>
				</table>
			</div>

			<div class="right1">
				<h3>Ajouter un nouveau BAC</h3>
				<br>
				Intitulé : <input type="textarea" class="textarea24" name="Intitulé">
				<br> <br>
				<input type="submit" class="Ajouter3" name="Ajouter">
			</div>
		</div>		
