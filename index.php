<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	include 'view/includes/header.php';
	
?>
<div class="container">
		<div id="content">
			<div class="left">
				<h2>Bienvenue sur la plateforme</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatem natus esse dolorem odio explicabo libero earum ab, numquam ut harum sapiente vitae alias id accusamus, delectus debitis beatae ipsum.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit tenetur placeat, omnis veniam harum voluptates, enim vitae voluptatem fugit doloribus natus possimus excepturi nemo, saepe delectus! Quisquam, laborum, et.
				</p>
				<h3>Dernières classes</h3>
				<table style="width:100%">
					<thead>
					  	<tr>
					    	<th>Nom de la classe</th>
					    	<th>Année courante</th> 
					    	<th>Nombre d'élèves</th>
					  	</tr>
					</thead>
					<tbody>
					  	<tr>
					    	<td>BTS 1</td>
					    	<td>2017</td> 
					    	<td>21</td>
				  		</tr>
				  		<tr>
					    	<td>BTS 2</td>
					    	<td>2017</td> 
					    	<td>16</td>
				  		</tr>
					</tbody>
				</table>
				<a href="" class="read-more">Voir l'ensemble des classes</a>

				<br>
				<br>
				<?php
					include 'view/includes/formulairecouleur.php';
					include 'couleur.php';
				?>

			</div>

			<div class="right">
				<img src="http://placehold.it/350x150" alt="">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deleniti sint quisquam? Est sunt quis minus, illum animi in, quisquam repellat ad, laudantium amet corporis blanditiis tempora quasi distinctio consectetur.
					<br>
					<a href="" class="read-more">Lire la suite</a>
				</p>

				<br>
				<br>

				
				<br>
				<?php
						if (key_exists('login', $_SESSION)) 
						{ 
							echo "Petit rappel : Vous vous êtes connecté à votre Session le, " . $_SESSION['datetime'];
						}
						else
						{
				?> 
							<h2>Connectez-vous !</h2>
							<?php
							include 'view/includes/formulaireDeConnexion.php';
						}

							?>
			</div>
		</div>
</div>

<?php
	include 'view/includes/footer.php';
?>
