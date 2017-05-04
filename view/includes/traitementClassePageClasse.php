<?php 
		if (isset($_GET['la_classe']) == false) {
		?>
			<script type="text/javascript"> alert("Erreur : le(s) paramètre(s) situé(s) dans l'URL ne sont pas ou ne sont plus présent(s)"); </script> 
		<?php
		}

		elseif (isset($_GET['la_classe']) == true) {
					
			if (empty($_GET['la_classe'])) {
			?>
				<script type="text/javascript"> alert("Erreur : le(s) paramètre(s) situés dans l'URL n'ont plus de valeur(s)"); </script> 
				<?php	
			}
			else { 
				$classe = $_GET['la_classe'];
			}
		}


	$extraireClasse = $bdd->prepare('SELECT Nom_classe FROM classe WHERE Nom_classe = ?');
		// Exécution de la requête 
	$extraireClasse->execute(array($classe));
	$lesClasses = $extraireClasse->fetch();
?>