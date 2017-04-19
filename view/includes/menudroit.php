<?php
	$connexion = "Connexion";
	require 'view/connexionSession.php';
	//require 'deconnexion.php';
?>
<ul class="main-menu-right">
	<li>
		<a href="#"><?php if (key_exists('login', $_SESSION)) 
						{
							echo "Bienvenue, " . $_SESSION['login'];  
						}
						else
						{
							echo ($connexion);
						}
					?></a>

			<?php if (key_exists('login', $_SESSION)) 
				{
			?>
				<ul>
					<li><a href="">Mon compte</a></li>
					<li><a href="view/deconnexion.php">Déconnexion</a></li>
				</ul>
				
			<?php
				}
			?>

			
	</li>
</ul>