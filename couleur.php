<?php
		/* On regarde à présent si le cookie existe déjà
		 * (soit parce que l'internaute a émis une préférence,
		 * soit simplement parce qu'il/elle est connu·e) */
		if (key_exists('couleurDuTexte', $_COOKIE)) 
		{
			$couleur = $_COOKIE['couleurDuTexte'];
		}
		// Couleur par défaut, si l'utilisateur arrive pour la première fois sur le site //
		else
		{
			$couleur = "black";			
		}
		
		if (isset($_GET['boutoncouleur']) && isset($_GET['couleurtexte'])) 
		{
			setcookie('couleurDuTexte', $_GET['couleurtexte'], time() + 30);
			$couleur = $_GET['couleurtexte'];
		}
?>

<style type="text/css">
	p { color: <?php echo $couleur; ?> }
</style>