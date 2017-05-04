<?php
	// On démarre la session AVANT d'écrire du code HTML
	session_start();

	 include 'view/includes/avant_header.php';
?>
	
	<title>Accueil</title>
</head>

<?php
	// On inclue le menu et la connexion à la page 
	include 'view/includes/header.php';
	include 'view/includes/connexionBD.php'; 
?>

<div class="container">
	<div style="height: 774px;">
		<div id="content">
			<div class="titre">
				<h1>Plateforme de gestion des stages du lycée</h1>
				<h2>Saint-Vincent</h2>
			</div>
			
			<!-- Responsive -->
			<?php include 'view/includes/responsiveMenuGauche.php'; ?>

			<?php 
			// On inclue le footer à la page
			include 'view/includes/footer.php';
			?>
		</div>
	</div>
</div>
