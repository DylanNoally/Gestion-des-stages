<!-- Inclusion des éléments de la page -->

<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On inclue le menu et la connexion à la page
include 'view/includes/header.php';
?>

<!-- Le corps de la page -->
<div class="container">
	<div id="content">
		<div id="interne_classe">
			<h1>Classe BTS1</h1>
			<h3>Historique des éléves par année</h3>

			<!-- Bouton "Ajouter une année" qui nous redirigera vers la page "Classe : nouvelle année"-->
			<p><a href="nouvelleAnnee.php"><img src="public/img/bouton_nv_classe.png" alt="Image bouton nouvelle classe" title="Nouvelle classe"></a></p>

			<div id="table_class">
				<table>
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prénom</th>
							<th>N° téléphone</th>
							<th>Année obtention BAC</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="2.2.1.php">Voir détail</a></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="2.2.1.php">Voir détail</a></td>
						</tr>
					</tbody>
				</table>

				<table>
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prénom</th>
							<th>N° téléphone</th>
							<th>Année obtention BAC</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="2.2.1.php">Voir détail</a></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="2.2.1.php">Voir détail</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>